import { defineCollection, z } from "astro:content";
import { createClient } from "microcms-js-sdk";

const client = createClient({
 serviceDomain: import.meta.env.MICROCMS_SERVICE_DOMAIN,
 apiKey: import.meta.env.MICROCMS_API_KEY,
});

// microCMSのコンテンツローダー（1回のAPIリクエストで取得）
const microCMSLoader = (endpoint: string) => {
 return async () => {
   try {
     console.log(`microCMSから${endpoint}データを取得中...`);
     const response = await client.getList({
       endpoint,
       queries: {
         limit: 100, // 1回のAPIリクエストで最大100件取得
         // fields: 'id,title,content,publishedAt', // 必要に応じて取得フィールドを制限
       }
     });
     console.log(`${response.contents.length}件の${endpoint}を取得しました`);
     return response.contents;
   } catch (error) {
     console.error(`microCMSからの${endpoint}取得に失敗:`, error);
     return [];
   }
 };
};

// 共通のフィールド
const microCMSDateFields = {
 createdAt: z.string(),
 updatedAt: z.string(),
 publishedAt: z.string(),
 revisedAt: z.string(),
};

// microCMS 画像フィールドの型定義
const microCMSImage = z.object({
 url: z.string().optional(),
 width: z.number().optional(),
 height: z.number().optional(),
 alt: z.string().optional(),
});

// コレクションの定義
// APIの設定
const blogs = defineCollection({
 loader: microCMSLoader('blogs'),
 schema: z.object({
   title: z.string(),
   content: z.string(),
  //  画像フィールド
   img: microCMSImage.optional(),
   ...microCMSDateFields,
 }),
});

// コレクションのエクスポート
export const collections = {
 blogs,
};
