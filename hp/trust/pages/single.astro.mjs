import { c as createComponent, r as renderComponent, a as renderTemplate, m as maybeRenderHead } from '../chunks/astro/server_B8TvkcDz.mjs';
import 'kleur/colors';
import { $ as $$Layout, a as $$Image } from '../chunks/Layout_FCQTlo12.mjs';
import '@astrojs/internal-helpers/path';
import '@astrojs/internal-helpers/remote';
import { d as dummy } from '../chunks/dummy_DX5t-qWt.mjs';
import { $ as $$Button } from '../chunks/Button_D26r5Kc6.mjs';
import { $ as $$Close } from '../chunks/Close_C62_uknf.mjs';
/* empty css                                  */
export { renderers } from '../renderers.mjs';

const $$Single = createComponent(($$result, $$props, $$slots) => {
  return renderTemplate`${renderComponent($$result, "Layout", $$Layout, { "title": "DX\u63A8\u9032\u306E\u6210\u529F\u6226\u7565 | Nexus Strategy", "description": "\u30C7\u30B8\u30BF\u30EB\u30C8\u30E9\u30F3\u30B9\u30D5\u30A9\u30FC\u30E1\u30FC\u30B7\u30E7\u30F3\u3092\u6210\u529F\u306B\u5C0E\u304F\u305F\u3081\u306E\u5B9F\u8DF5\u7684\u30A2\u30D7\u30ED\u30FC\u30C1", "data-astro-cid-ecdbn4i4": true }, { "default": ($$result2) => renderTemplate` ${maybeRenderHead()}<div class="single" data-aos="fade-up" data-aos-duration="3000" data-astro-cid-ecdbn4i4> <div class="single-header" data-astro-cid-ecdbn4i4> <div class="single-category-wrapper" data-astro-cid-ecdbn4i4> <div class="single-category" data-astro-cid-ecdbn4i4> <p class="single-category__text" data-astro-cid-ecdbn4i4>カテゴリが入ります。</p> </div> <h2 class="single__title" data-astro-cid-ecdbn4i4>ここにタイトルが入ります。</h2> </div> </div> <article class="post" data-astro-cid-ecdbn4i4> <div class="post__content" data-astro-cid-ecdbn4i4> <div class="post__inner" data-astro-cid-ecdbn4i4> <figure class="post__img" data-astro-cid-ecdbn4i4> ${renderComponent($$result2, "Image", $$Image, { "src": dummy, "alt": "\u30C7\u30B8\u30BF\u30EB\u30C8\u30E9\u30F3\u30B9\u30D5\u30A9\u30FC\u30E1\u30FC\u30B7\u30E7\u30F3\u6226\u7565", "data-astro-cid-ecdbn4i4": true })} </figure> <div class="post__textarea" data-astro-cid-ecdbn4i4> <p class="post__text" data-astro-cid-ecdbn4i4>デジタルトランスフォーメーション（DX）は、単なるIT化ではありません。ビジネスモデルそのものを変革し、新たな価値を創造するための戦略的取り組みです。<br data-astro-cid-ecdbn4i4><br data-astro-cid-ecdbn4i4>多くの企業がDXの必要性を認識しながらも、具体的な進め方に悩んでいます。成功の鍵は、明確なビジョンの設定、段階的な実行計画、そして組織全体の変革マインドセットにあります。<br data-astro-cid-ecdbn4i4><br data-astro-cid-ecdbn4i4>本記事では、DX推進における重要なポイントと、実際の成功事例から学ぶべき教訓について解説します。データ基盤の構築からビジネスモデルの変革まで、包括的なアプローチが求められます。<br data-astro-cid-ecdbn4i4><br data-astro-cid-ecdbn4i4>また、DXは経営層のコミットメントが不可欠です。トップダウンとボトムアップの両方のアプローチを組み合わせることで、組織全体を巻き込んだ変革が実現します。</p> </div> </div> </div> </article></div> <div class="post__link" data-astro-cid-ecdbn4i4> ${renderComponent($$result2, "Button", $$Button, { "label": "\u30B3\u30E9\u30E0\u4E00\u89A7\u306B\u623B\u308B", "link": "/column", "reverse": true, "data-astro-cid-ecdbn4i4": true })} </div> ${renderComponent($$result2, "Close", $$Close, { "data-astro-cid-ecdbn4i4": true })} ` })} `;
}, "/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/single.astro", void 0);

const $$file = "/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/single.astro";
const $$url = "/trust/single";

const _page = /*#__PURE__*/Object.freeze(/*#__PURE__*/Object.defineProperty({
  __proto__: null,
  default: $$Single,
  file: $$file,
  url: $$url
}, Symbol.toStringTag, { value: 'Module' }));

const page = () => _page;

export { page };
