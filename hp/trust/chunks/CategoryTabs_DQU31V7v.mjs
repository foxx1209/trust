import { b as createAstro, c as createComponent, m as maybeRenderHead, d as addAttribute, a as renderTemplate } from './astro/server_B8TvkcDz.mjs';
import 'kleur/colors';
import 'clsx';
/* empty css                         */

const CATEGORIES = {
  strategy: {
    slug: "strategy",
    name: "経営戦略",
    description: "経営戦略に関する記事一覧"
  },
  "ai-tips": {
    slug: "ai-tips",
    name: "AI実務活用Tips",
    description: "AI実務活用に関する記事一覧"
  },
  abm: {
    slug: "abm",
    name: "ABM",
    description: "ABMに関する記事一覧"
  }
};

const $$Astro = createAstro("https://hiro-fox.site/");
const $$CategoryTabs = createComponent(($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro, $$props, $$slots);
  Astro2.self = $$CategoryTabs;
  const { currentCategory = "all" } = Astro2.props;
  return renderTemplate`${maybeRenderHead()}<ul class="column__list" data-astro-cid-6ykigkpy> <!-- 全て --> <li${addAttribute(`column__item ${currentCategory === "all" ? "is-active" : ""}`, "class")} data-astro-cid-6ykigkpy> <a${addAttribute(`${"/trust/"}column/`, "href")} class="column__item-text" data-astro-cid-6ykigkpy>全て</a> </li> <!-- カテゴリー --> ${Object.entries(CATEGORIES).map(([key, category]) => renderTemplate`<li${addAttribute(`column__item ${currentCategory === key ? "is-active" : ""}`, "class")} data-astro-cid-6ykigkpy> <a${addAttribute(`${"/trust/"}column/${category.slug}/`, "href")} class="column__item-text" data-astro-cid-6ykigkpy> ${category.name} </a> </li>`)} </ul> `;
}, "/Users/mizukawahiroshikana/Desktop/trust/hp/src/components/CategoryTabs.astro", void 0);

export { $$CategoryTabs as $, CATEGORIES as C };
