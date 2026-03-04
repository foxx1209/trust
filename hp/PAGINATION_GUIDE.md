# コラムページのページネーション実装ガイド

## 📁 フォルダ構成

```
src/pages/
└── column/
    ├── index.astro          # 1ページ目（/trust/column/）
    ├── [blogId].astro       # 個別記事ページ
    └── page/
        └── [page].astro     # 2ページ目以降（/trust/column/page/2、/trust/column/page/3...）
```

## 🤔 なぜこのフォルダ構成にしたのか

### 理由1: SEOとユーザビリティの最適化
- **1ページ目を `/column/` にする**: 
  - メインのコラム一覧URLがシンプルで覚えやすい
  - SEO的にも `/column/` が最も重要なページとして認識される
  - ユーザーが直感的にアクセスできる

- **2ページ目以降を `/column/page/2`、`/column/page/3` にする**:
  - URLの階層構造が明確
  - ページ番号が分かりやすい
  - Googleなどの検索エンジンが推奨するURL構造

### 理由2: Astroの動的ルーティングの制約を回避
Astroで `paginate()` 関数を使うと、**1ページ目も自動的に生成されてしまう**ため、`index.astro` と競合してしまいます。

- ❌ **避けた構成**: すべてを `[page].astro` で管理
  ```
  /column/1  ← paginate()が自動生成
  /column/2
  /column/3
  ```
  問題点: `/column/` と `/column/1` が別のページになり、SEO的に不利

- ✅ **採用した構成**: 1ページ目と2ページ目以降を分離
  ```
  /column/           ← index.astro（手動）
  /column/page/2     ← [page].astro（手動）
  /column/page/3     ← [page].astro（手動）
  ```
  利点: 1ページ目のURLがシンプルで、ページ構造が明確

## 📄 各ファイルの役割と実装

### 0. `/components/CardCl.astro` - 汎用カード一覧表示コンポーネント

#### 役割
- **汎用的な**カード一覧を表示する再利用可能なコンポーネント
- ブログ、ダウンロード資料、ニュースなど、**どんなコンテンツにも使える**
- `index.astro`と`[page].astro`の両方で使用

#### 重要なコード解説

```javascript
/**
 * 汎用的なカード一覧表示コンポーネント
 * 
 * 使用例:
 * - ブログ記事一覧: <CardCl items={blogs} baseUrl="column" />
 * - ダウンロード資料: <CardCl items={downloads} baseUrl="download" />
 * - ニュース一覧: <CardCl items={news} baseUrl="news" />
 */
interface Props {
  items: any[];  // 表示するアイテムの配列（必須）
  baseUrl?: string;  // リンク先のベースURL（デフォルト: "column"）
}

const { 
  items, 
  baseUrl = ""  // デフォルトは "なし"
} = Astro.props;
```

**なぜこのコードが必要か:**

1. **`items: any[]`（必須）**:
   - 汎用的な名前にすることで、どんなコンテンツでも対応可能
   - `blogs`、`downloads`、`news`など、呼び出し側で適切なデータを渡す
   - 必須にすることで、型安全性を保ちつつ柔軟性を確保

2. **`baseUrl?: string`（オプショナル）**:
   - リンク先のベースURLをカスタマイズ可能
   - デフォルトは`"column"`（後方互換性）
   - 例: `baseUrl="download"` → `/trust/download/[id]`にリンク

3. **型安全性とパフォーマンス**:
   - コンポーネント内で`getCollection()`を呼ばない設計
   - 呼び出し側でデータを取得→型チェックが効く
   - 不要なデータ取得を防ぐ（必要な分だけ渡す）

#### 使用例

**ブログ記事一覧の場合:**
```jsx
const blogs = await getCollection("blogs");
<CardCl items={blogs} baseUrl="column" />
```

**ダウンロード資料の場合:**
```jsx
const downloads = await getCollection("downloads");
<CardCl items={downloads} baseUrl="download" />
```

**ニュース一覧の場合:**
```jsx
const news = await getCollection("news");
<CardCl items={news} baseUrl="news" />
```

**ページネーション（一部のみ表示）の場合:**
```jsx
const blogs = await getCollection("blogs");
const firstPage = blogs.slice(0, 6);  // 最初の6件だけ
<CardCl items={firstPage} baseUrl="column" />
```

#### テンプレート部分

```jsx
<div class="column__cards">
  {blogs.map((blog) => (
    <a class="card" href={`${import.meta.env.BASE_URL}column/${blog.id}`}>
      <div class="card__img"> 
        <img loading="lazy" decoding="async" src={blog.data.img?.url} alt={blog.data.img?.alt || blog.data.title}/>
      </div>
      <h3 class="card__title">{blog.data.title}</h3>
    </a>
  ))}
</div>
```

**コードの意味:**
- `blogs.map()`: 渡された記事配列をループして、各カードを生成
- `${import.meta.env.BASE_URL}column/${blog.id}`: ベースパスを含めた記事詳細URLを生成
- `loading="lazy"`: 画像の遅延読み込みでパフォーマンス向上
- このコンポーネントにスタイルも含まれているため、親ページにスタイルを書く必要がない

### 1. `/column/index.astro` - 1ページ目

#### 役割
- コラム一覧の**最初の6件**を表示
- ページネーションの**1ページ目**として機能
- URLは `/trust/column/`

#### 重要なコード解説

```javascript
// 1. すべてのブログ記事を取得
const allBlogs = await getCollection("blogs");

// 2. ページサイズを定義（1ページに表示する記事数）
const pageSize = 6;

// 3. 総ページ数を計算
const totalPages = Math.ceil(allBlogs.length / pageSize);

// 4. 現在のページ番号（1ページ目）
const currentPage = 1;

// 5. 最初の6件のみを抽出（0番目から6番目まで）
const blogs = allBlogs.slice(0, pageSize);
```

**なぜこのコードが必要か:**
- `slice(0, pageSize)`: 配列の最初の6件だけを取得するため
- `totalPages`: ページネーションリンクを何個表示するか決めるため
- 手動でページ数を計算することで、2ページ目以降と同じロジックを共有できる

#### カード表示部分（コンポーネント化）

```jsx
<!-- カード表示 -->
<CardCl items={blogs} baseUrl="column" />
```

**なぜコンポーネントを使うのか:**
- **DRY原則**: コードの重複を避ける
- **保守性**: カードのデザインを変更する際、1箇所を修正すれば全ページに反映
- **再利用性**: 他のページでも同じカード表示が使える（ブログ以外でも！）
- **可読性**: ページのロジックとUIが分離されて理解しやすい
- **汎用性**: どんなコンテンツタイプにも対応可能

**propsの渡し方:**
- `items={blogs}`: 表示したい記事配列をコンポーネントに渡す（必須）
- `baseUrl="column"`: リンク先のベースURL（省略すると`"column"`がデフォルト）
- 1ページ目では最初の6件のみを渡す

#### ページネーション部分

```jsx
<!-- ページネーション -->
<div class="column__paganation">
  <!-- 1ページ目（現在のページなのでis-activeクラス） -->
  <a href={`${import.meta.env.BASE_URL}column`} class="column__paganation-link is-active">
    <span class="column__paganation-number">1</span>
  </a>
  
  <!-- 2ページ目以降のリンクを動的に生成 -->
  {Array.from({ length: totalPages - 1 }, (_, i) => i + 2).map((pageNum) => (
    <a href={`${import.meta.env.BASE_URL}column/page/${pageNum}`} class="column__paganation-link">
      <span class="column__paganation-number">{pageNum}</span>
    </a>
  ))}
</div>
```

**コードの意味:**
- `Array.from({ length: totalPages - 1 }, (_, i) => i + 2)`: 
  - 総ページ数が5の場合、`[2, 3, 4, 5]` という配列を生成
  - `totalPages - 1`: 1ページ目は既に表示済みなので引く
  - `i + 2`: インデックスは0から始まるので、+2することで2ページ目から開始

- `import.meta.env.BASE_URL`: 
  - ベースパス（`/trust/`）を自動的に追加
  - 本番環境でサブディレクトリに配置する場合に必須

### 2. `/column/page/[page].astro` - 2ページ目以降

#### 役割
- コラム一覧の**2ページ目以降**を表示
- 動的ルーティングで複数のページを自動生成
- URLは `/trust/column/page/2`、`/trust/column/page/3`...

#### 重要なコード解説

```javascript
// getStaticPaths()は、ビルド時にどのページを生成するか決める関数
export async function getStaticPaths() {
  // 1. すべてのブログ記事を取得
  const allBlogs = await getCollection("blogs");
  const pageSize = 6;
  const totalPages = Math.ceil(allBlogs.length / pageSize);
  
  // 2. 2ページ目以降のパスを配列で生成
  return Array.from({ length: totalPages - 1 }, (_, i) => {
    const pageNum = i + 2;  // 2, 3, 4, 5...
    const start = (pageNum - 1) * pageSize;  // 表示開始位置
    const end = start + pageSize;  // 表示終了位置
    
    return {
      params: { page: String(pageNum) },  // URLパラメータ
      props: {  // コンポーネントに渡すデータ
        blogs: allBlogs.slice(start, end),  // 該当ページの記事
        currentPage: pageNum,  // 現在のページ番号
        totalPages: totalPages,  // 総ページ数
      },
    };
  });
}

// 3. propsから値を受け取る
const { blogs, currentPage, totalPages } = Astro.props;
```

**コンポーネントの使用:**
```jsx
<CardCl items={blogs} baseUrl="column" />
```
- 2ページ目以降でも同じ`CardCl`コンポーネントを使用
- 該当ページの記事配列（例: 7〜12件目）を渡すだけでカード表示が完成
- `baseUrl`を変えれば、他のコンテンツタイプでも使える

**なぜこのコードが必要か:**

1. **`getStaticPaths()`の役割**:
   - Astroは静的サイトジェネレーター（SSG）なので、ビルド時にすべてのページを事前生成
   - この関数で「どのURLを生成するか」「各ページにどのデータを渡すか」を定義

2. **`params: { page: String(pageNum) }`**:
   - ファイル名が `[page].astro` なので、`page` パラメータが必要
   - `String(pageNum)`: URLパラメータは文字列で渡す必要がある

3. **`slice(start, end)`の計算**:
   - 2ページ目: `slice(6, 12)` → 7〜12件目を表示
   - 3ページ目: `slice(12, 18)` → 13〜18件目を表示
   - 正確にページごとの記事を切り分けるため

4. **`props` でデータを渡す理由**:
   - 各ページで必要なデータ（記事リスト、ページ番号）を事前計算
   - ビルド時に一度だけ計算すれば、実行時は高速に表示可能

#### ページネーション部分

```jsx
<div class="column__paganation">
  <!-- 1ページ目へのリンク -->
  <a href={`${import.meta.env.BASE_URL}column`} class="column__paganation-link">
    <span class="column__paganation-number">1</span>
  </a>
  
  <!-- 2ページ目以降 -->
  {Array.from({ length: totalPages - 1 }, (_, i) => i + 2).map((pageNum) => (
    <a 
      href={`${import.meta.env.BASE_URL}column/page/${pageNum}`} 
      class={`column__paganation-link ${currentPage === pageNum ? 'is-active' : ''}`}
    >
      <span class="column__paganation-number">{pageNum}</span>
    </a>
  ))}
</div>
```

**コードの意味:**
- `currentPage === pageNum ? 'is-active' : ''`:
  - 現在表示中のページ番号に一致する場合、`is-active` クラスを追加
  - CSSでハイライト表示するため

## 🎯 技術的なポイント

### 1. コンポーネント化の重要性

**`CardCl.astro`コンポーネントのメリット:**

1. **コードの重複を排除**: 
   - カード表示のHTML/CSSが1箇所に集約
   - `index.astro`と`[page].astro`で同じコードを書く必要がない

2. **保守性の向上**:
   - デザイン変更時は`CardCl.astro`だけ修正すればOK
   - バグ修正も1箇所で完結

3. **一貫性の保証**:
   - すべてのページで同じカード表示が保証される
   - スタイルの不整合が起きない

4. **汎用性と再利用性**:
   ```javascript
   // コンポーネント側
   interface Props {
     items: any[];  // どんなコンテンツでもOK
     baseUrl?: string;  // リンク先をカスタマイズ可能
   }
   ```
   - **ブログ以外でも使える**: ダウンロード資料、ニュース、事例など
   - **型安全**: 呼び出し側でデータを取得するため、型チェックが効く
   - **柔軟性**: `baseUrl`を変えるだけで別のコンテンツタイプに対応

5. **実用例**:
   ```jsx
   <!-- ブログ記事 -->
   <CardCl items={blogs} baseUrl="column" />
   
   <!-- ダウンロード資料 -->
   <CardCl items={downloads} baseUrl="download" />
   
   <!-- ニュース -->
   <CardCl items={news} baseUrl="news" />
   ```
   - 同じコンポーネントで複数のコンテンツタイプに対応
   - コードの重複がゼロ

### 2. `paginate()` を使わなかった理由

Astroには便利な `paginate()` 関数がありますが、今回は使いませんでした。

**`paginate()`を使った場合の問題:**
```javascript
export const getStaticPaths = async ({ paginate }: GetStaticPathsOptions) => {
  const blogs = await getCollection("blogs");
  return paginate(blogs, { pageSize: 6 });
};
```

このコードは以下のURLを自動生成します:
- `/column/page/1`
- `/column/page/2`
- `/column/page/3`

**問題点:**
- 1ページ目のURLが `/column/page/1` になってしまう
- `/column/` と `/column/page/1` が別々に存在するとSEO的に不利
- ユーザーが混乱する

### 2. `import.meta.env.BASE_URL` の重要性

```javascript
href={`${import.meta.env.BASE_URL}column`}
```

**なぜ必要か:**
- `astro.config.ts` で `base: "/trust/"` が設定されている
- 本番環境では `/trust/column/` というパスになる
- `import.meta.env.BASE_URL` はこのベースパスを自動的に含めてくれる

**使わない場合の問題:**
```javascript
href="/column"  // ❌ /column にアクセスしてしまう（404エラー）
href={`${import.meta.env.BASE_URL}column`}  // ✅ /trust/column にアクセス
```

### 3. `Array.from()` の使い方

```javascript
Array.from({ length: totalPages - 1 }, (_, i) => i + 2)
```

**この式の意味:**
1. `{ length: totalPages - 1 }`: 配列の長さを指定（例: 総ページ数5なら、長さ4）
2. `(_, i) => i + 2`: 各要素をマッピング（`_`は未使用の第1引数、`i`はインデックス）
   - i = 0 → 2
   - i = 1 → 3
   - i = 2 → 4
   - i = 3 → 5
3. 結果: `[2, 3, 4, 5]`

**なぜこの方法か:**
- 2から始まるページ番号の配列を簡単に生成できる
- ループで回して各ページのリンクを作成

### 4. `slice()` による配列の切り分け

```javascript
const start = (pageNum - 1) * pageSize;  // 例: (2-1) * 6 = 6
const end = start + pageSize;  // 例: 6 + 6 = 12
allBlogs.slice(start, end)  // 例: 配列の6番目から12番目まで
```

**計算例（pageSize = 6の場合）:**
- 1ページ目: `slice(0, 6)` → 0〜5番目（記事1〜6）
- 2ページ目: `slice(6, 12)` → 6〜11番目（記事7〜12）
- 3ページ目: `slice(12, 18)` → 12〜17番目（記事13〜18）

## 🔍 URL構造の全体像

```
/trust/column/              ← index.astro（1ページ目）
/trust/column/page/2/       ← [page].astro（2ページ目）
/trust/column/page/3/       ← [page].astro（3ページ目）
/trust/column/page/4/       ← [page].astro（4ページ目）
...
/trust/column/[blogId]/     ← [blogId].astro（個別記事ページ）
```

**特徴:**
- 階層構造が明確
- URLから内容が推測できる
- SEO フレンドリー

## 🐛 トラブルシューティング

### 問題1: ページネーションが動かない

**症状**: リンクをクリックしても404エラー

**原因と解決策:**
1. **開発サーバーの再起動が必要**
   ```bash
   # Ctrl+C で停止してから
   npm run dev
   ```

2. **ビルドして確認**
   ```bash
   npm run build
   npm run preview
   ```

### 問題2: 1ページ目と2ページ目が競合する

**症状**: `/column/` と `/column/page/1/` が別々に存在する

**原因**: `paginate()` 関数を使っている

**解決策**: 手動で `getStaticPaths()` を実装（このガイドの方法）

### 問題3: スタイルが適用されない

**症状**: 2ページ目以降でCSSが壊れる

**原因**: 画像パスが相対パスになっている

**解決策:**
```css
/* ❌ 相対パス */
background: url("../assets/images/column-cards-bg.png");

/* ✅ 正しいパス（ページの深さに応じて調整） */
/* index.astro の場合 */
background: url("../../assets/images/column-cards-bg.png");

/* [page].astro の場合 */
background: url("../../../assets/images/column-cards-bg.png");
```

### 問題4: TypeScript エラー「column.astro が見つかりません」

**症状**: 存在しないファイルのエラーが出る

**原因**: TypeScriptのキャッシュに古い参照が残っている

**解決策:**
1. 開発サーバーを再起動
2. VSCodeの TypeScript サーバーを再起動（Cmd+Shift+P → "TypeScript: Restart TS Server"）
3. キャッシュを削除
   ```bash
   rm -rf .astro
   rm -rf node_modules/.astro
   ```

## 📝 カスタマイズ方法

### ページサイズの変更

```javascript
// 1ページあたりの記事数を変更
const pageSize = 6;  // ← この数字を変更
```

### 他のコンテンツタイプでの使用

**例1: ダウンロード資料一覧ページを作る**

```astro
---
// src/pages/download/index.astro
import CardCl from "@components/CardCl.astro";
import { getCollection } from "astro:content";

const allDownloads = await getCollection("downloads");
const pageSize = 6;
const downloads = allDownloads.slice(0, pageSize);
const totalPages = Math.ceil(allDownloads.length / pageSize);
---

<Layout title="ダウンロード資料一覧">
  <!-- CardClコンポーネントを再利用 -->
  <CardCl items={downloads} baseUrl="download" />
  
  <!-- ページネーション -->
  <div class="column__paganation">
    <a href="/download" class="column__paganation-link is-active">
      <span class="column__paganation-number">1</span>
    </a>
    {Array.from({ length: totalPages - 1 }, (_, i) => i + 2).map((pageNum) => (
      <a href={`/download/page/${pageNum}`} class="column__paganation-link">
        <span class="column__paganation-number">{pageNum}</span>
      </a>
    ))}
  </div>
</Layout>
```

**例2: ニュース一覧ページを作る**

```astro
---
// src/pages/news/index.astro
import CardCl from "@components/CardCl.astro";
import { getCollection } from "astro:content";

const news = await getCollection("news");
---

<Layout title="ニュース一覧">
  <!-- CardClコンポーネントを再利用（全件表示） -->
  <CardCl items={news} baseUrl="news" />
</Layout>
```

**ポイント:**
- 同じ`CardCl`コンポーネントを使い回せる
- `baseUrl`を変えるだけで、適切なリンクが生成される
- ページネーションのロジックも流用可能
- デザインの一貫性が自動的に保たれる

### ページネーション表示数の制限

現在は全ページ番号を表示していますが、「1 ... 5 6 7 ... 20」のように省略したい場合:

```javascript
// ページネーション部分を以下のように変更
{Array.from({ length: Math.min(5, totalPages) }, (_, i) => {
  let pageNum;
  if (currentPage <= 3) {
    pageNum = i + 1;
  } else if (currentPage >= totalPages - 2) {
    pageNum = totalPages - 4 + i;
  } else {
    pageNum = currentPage - 2 + i;
  }
  return (
    <a 
      href={pageNum === 1 ? `${import.meta.env.BASE_URL}column` : `${import.meta.env.BASE_URL}column/page/${pageNum}`}
      class={`column__paganation-link ${currentPage === pageNum ? 'is-active' : ''}`}
    >
      <span class="column__paganation-number">{pageNum}</span>
    </a>
  );
})}
```

## 🎓 まとめ

このページネーション実装の**核心**:

1. **`CardCl.astro`でコンポーネント化** → コードの重複を排除、保守性向上
2. **1ページ目を `index.astro` で分離** → URLをシンプルに、SEO最適化
3. **2ページ目以降を `[page].astro` で動的生成** → 効率的なページ生成
4. **手動で `getStaticPaths()` を実装** → `paginate()` の制約を回避
5. **`import.meta.env.BASE_URL` を使用** → ベースパス対応
6. **計算ロジックを共有** → 一貫性のあるページング

### ファイル構成のまとめ

```
src/
├── components/
│   └── CardCl.astro          # ⭐ カード表示の再利用コンポーネント
│                             #    (HTML + CSS + ロジック)
└── pages/
    └── column/
        ├── index.astro       # 1ページ目（CardClを使用）
        ├── [blogId].astro    # 個別記事
        └── page/
            └── [page].astro  # 2ページ目以降（CardClを使用）
```

この設計により、**保守性が高く、SEO に強く、ユーザーフレンドリーで、コードの重複がない**理想的なページネーションが実現できます。

