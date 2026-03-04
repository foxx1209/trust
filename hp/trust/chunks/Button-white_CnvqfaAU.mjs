import { b as createAstro, c as createComponent, m as maybeRenderHead, d as addAttribute, a as renderTemplate } from './astro/server_B8TvkcDz.mjs';
import 'kleur/colors';
import 'clsx';
/* empty css                      */

const $$Astro = createAstro("https://hiro-fox.site/");
const $$ButtonWhite = createComponent(($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro, $$props, $$slots);
  Astro2.self = $$ButtonWhite;
  const { link, label } = Astro2.props;
  const baseUrl = "/trust/";
  const href = link?.startsWith("/") ? `${baseUrl}${link.slice(1)}` : link || baseUrl;
  return renderTemplate`${maybeRenderHead()}<a class="btn-white"${addAttribute(href, "href")} data-astro-cid-ldxm37mr> <p class="btn-white__text" data-astro-cid-ldxm37mr>${label}</p> </a> `;
}, "/Users/mizukawahiroshikana/Desktop/trust/hp/src/components/Button-white.astro", void 0);

export { $$ButtonWhite as $ };
