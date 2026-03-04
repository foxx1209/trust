import { b as createAstro, c as createComponent, m as maybeRenderHead, d as addAttribute, a as renderTemplate } from './astro/server_B8TvkcDz.mjs';
import 'kleur/colors';
import 'clsx';
/* empty css                         */

const $$Astro = createAstro("https://hiro-fox.site/");
const $$Button = createComponent(($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro, $$props, $$slots);
  Astro2.self = $$Button;
  const {
    small = false,
    middel = false,
    large = false,
    white = false,
    reverse = false
  } = Astro2.props;
  const { link, label } = Astro2.props;
  const baseUrl = "/trust/";
  const href = link?.startsWith("/") ? `${baseUrl}${link.slice(1)}` : link || baseUrl;
  return renderTemplate`${maybeRenderHead()}<a${addAttribute(["btn", {
    "btn--small": small,
    "btn--middle": middel,
    "btn--large": large,
    "btn--white": white,
    "btn--reverse": reverse
  }], "class:list")}${addAttribute(href, "href")} data-astro-cid-vnzlvqnm> ${label} </a> `;
}, "/Users/mizukawahiroshikana/Desktop/trust/hp/src/components/Button.astro", void 0);

export { $$Button as $ };
