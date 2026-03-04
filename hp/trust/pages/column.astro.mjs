import { c as createComponent, r as renderComponent, a as renderTemplate, m as maybeRenderHead, d as addAttribute } from '../chunks/astro/server_B8TvkcDz.mjs';
import 'kleur/colors';
import { $ as $$Layout } from '../chunks/Layout_FCQTlo12.mjs';
import { $ as $$SubFv } from '../chunks/sub-fv_BI5OrUUL.mjs';
import { $ as $$CardCl } from '../chunks/CardCl_D1lYoeX2.mjs';
import { $ as $$Close } from '../chunks/Close_C62_uknf.mjs';
import { $ as $$CategoryTabs } from '../chunks/CategoryTabs_DQU31V7v.mjs';
import { g as getCollection } from '../chunks/_astro_content_r1xANtsu.mjs';
/* empty css                                 */
export { renderers } from '../renderers.mjs';

const $$Index = createComponent(async ($$result, $$props, $$slots) => {
  const pageSize = 6;
  const allBlogs = await getCollection("blogs");
  const totalPages = Math.ceil(allBlogs.length / pageSize);
  const blogs = allBlogs.slice(0, pageSize);
  return renderTemplate`${renderComponent($$result, "Layout", $$Layout, { "title": "コラム一覧 | Nexus Strategy", "description": "経営戦略とビジネス変革に関する最新情報", "data-astro-cid-d32gqz3p": true }, { "default": async ($$result2) => renderTemplate` ${renderComponent($$result2, "SubFv", $$SubFv, { "title": "コラム一覧", "titleEn": "Column", "sp": true, "data-astro-cid-d32gqz3p": true })} ${maybeRenderHead()}<div class="column" data-aos="fade-up" data-aos-duration="3000" data-astro-cid-d32gqz3p> <div class="column__inner" data-astro-cid-d32gqz3p> ${renderComponent($$result2, "CategoryTabs", $$CategoryTabs, { "currentCategory": "all", "data-astro-cid-d32gqz3p": true })} <!-- カード表示 --> ${renderComponent($$result2, "CardCl", $$CardCl, { "items": blogs, "baseUrl": "column", "data-astro-cid-d32gqz3p": true })} <!-- ページネーション --> ${totalPages > 1 && renderTemplate`<div class="column__paganation" data-astro-cid-d32gqz3p> ${Array.from({ length: totalPages }, (_, i) => i + 1).map((page) => renderTemplate`<a${addAttribute(
    page === 1 ? `${"/trust/"}column/` : `${"/trust/"}column/page/${page}/`,
    "href"
  )}${addAttribute(page === 1 ? "column__paganation-link is-active" : "column__paganation-link", "class")} data-astro-cid-d32gqz3p> <span class="column__paganation-number" data-astro-cid-d32gqz3p>${page}</span> </a>`)} </div>`} </div> </div> ${renderComponent($$result2, "Close", $$Close, { "data-astro-cid-d32gqz3p": true })} ` })} `;
}, "/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/column/index.astro", void 0);
const $$file = "/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/column/index.astro";
const $$url = "/trust/column";

const _page = /*#__PURE__*/Object.freeze(/*#__PURE__*/Object.defineProperty({
  __proto__: null,
  default: $$Index,
  file: $$file,
  url: $$url
}, Symbol.toStringTag, { value: 'Module' }));

const page = () => _page;

export { page };
