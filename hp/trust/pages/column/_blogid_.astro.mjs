import { b as createAstro, c as createComponent, r as renderComponent, a as renderTemplate, m as maybeRenderHead, u as unescapeHTML } from '../../chunks/astro/server_B8TvkcDz.mjs';
import 'kleur/colors';
import { g as getCollection } from '../../chunks/_astro_content_r1xANtsu.mjs';
import { $ as $$Layout } from '../../chunks/Layout_FCQTlo12.mjs';
/* empty css                                       */
export { renderers } from '../../renderers.mjs';

const $$Astro = createAstro("https://hiro-fox.site/");
async function getStaticPaths() {
  const blogs = await getCollection("blogs");
  return blogs.map((blog) => ({
    params: {
      blogId: blog.id
    },
    props: {
      blog
    }
  }));
}
const $$blogId = createComponent(async ($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro, $$props, $$slots);
  Astro2.self = $$blogId;
  const { blog } = Astro2.props;
  return renderTemplate`${renderComponent($$result, "Layout", $$Layout, { "title": "Nexus Strategy - \u6226\u7565\u7684\u30B3\u30F3\u30B5\u30EB\u30C6\u30A3\u30F3\u30B0", "description": "\u7D4C\u55B6\u6226\u7565\u304B\u3089\u4E8B\u696D\u6539\u9769\u307E\u3067\u3001\u30C7\u30FC\u30BF\u30C9\u30EA\u30D6\u30F3\u306A\u30A2\u30D7\u30ED\u30FC\u30C1\u3067\u4F01\u696D\u306E\u6301\u7D9A\u7684\u6210\u9577\u3092\u652F\u63F4\u3057\u307E\u3059\u3002", "data-astro-cid-qgplekin": true }, { "default": async ($$result2) => renderTemplate` ${maybeRenderHead()}<main class="blog-detail" data-astro-cid-qgplekin> <article class="article" data-astro-cid-qgplekin> <header class="article__header" data-astro-cid-qgplekin> <h1 class="article__title" data-astro-cid-qgplekin>${blog.data.title}</h1> </header> <div class="article__body" data-astro-cid-qgplekin> ${blog.data.content ? renderTemplate`<div class="prose" data-astro-cid-qgplekin>${unescapeHTML(blog.data.content)}</div>` : renderTemplate`<div class="prose prose--empty" data-astro-cid-qgplekin> <p data-astro-cid-qgplekin>コンテンツが登録されていません。</p> </div>`} </div> </article> </main> ` })} `;
}, "/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/column/[blogId].astro", void 0);

const $$file = "/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/column/[blogId].astro";
const $$url = "/trust/column/[blogId]";

const _page = /*#__PURE__*/Object.freeze(/*#__PURE__*/Object.defineProperty({
  __proto__: null,
  default: $$blogId,
  file: $$file,
  getStaticPaths,
  url: $$url
}, Symbol.toStringTag, { value: 'Module' }));

const page = () => _page;

export { page };
