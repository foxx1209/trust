import { c as createComponent, r as renderComponent, a as renderTemplate, m as maybeRenderHead, d as addAttribute } from '../chunks/astro/server_B8TvkcDz.mjs';
import 'kleur/colors';
import { $ as $$Layout } from '../chunks/Layout_FCQTlo12.mjs';
import { $ as $$SubFv } from '../chunks/sub-fv_BI5OrUUL.mjs';
/* empty css                                */
export { renderers } from '../renderers.mjs';

const $$Form = createComponent(($$result, $$props, $$slots) => {
  const baseUrl = "/trust/";
  return renderTemplate`${renderComponent($$result, "Layout", $$Layout, { "title": "お問い合わせ | Nexus Strategy", "description": "お気軽にお問い合わせください", "data-astro-cid-xb3inwvi": true }, { "default": ($$result2) => renderTemplate` ${renderComponent($$result2, "SubFv", $$SubFv, { "title": "お問い合わせ", "titleEn": "Contact", "data-astro-cid-xb3inwvi": true })} ${maybeRenderHead()}<div class="inner" data-astro-cid-xb3inwvi> <form class="form" action="post" data-astro-cid-xb3inwvi> <div class="form__inner" data-astro-cid-xb3inwvi> <p class="form__text" data-astro-cid-xb3inwvi>弊社へのお問い合わせは<br class="u-sp" data-astro-cid-xb3inwvi>こちらのフォームより承っております。</p> <div class="form__content" data-astro-cid-xb3inwvi> <label class="form__label" data-astro-cid-xb3inwvi> <span class="form__label-text" data-required="必須" data-astro-cid-xb3inwvi>会社名</span> <input class="form__input" type="text" name="company" placeholder="会社名" autocomplete="organization" required data-astro-cid-xb3inwvi> </label> <label class="form__label" data-astro-cid-xb3inwvi> <span class="form__label-text" data-required="必須" data-astro-cid-xb3inwvi>名前</span> <input class="form__input" type="text" name="name" placeholder="山田 太郎" autocomplete="name" required data-astro-cid-xb3inwvi> </label> <label class="form__label" data-astro-cid-xb3inwvi> <span class="form__label-text" data-required="必須" data-astro-cid-xb3inwvi>電話番号</span> <input class="form__input" type="tel" name="tel" placeholder="080-0000-0000" autocomplete="tel" required data-astro-cid-xb3inwvi> </label> <label class="form__label" data-astro-cid-xb3inwvi> <span class="form__label-text" data-required="必須" data-astro-cid-xb3inwvi>メールアドレス</span> <input class="form__input" type="email" name="email" placeholder="trust_link@sample.jp" autocomplete="email" required data-astro-cid-xb3inwvi> </label> <label class="form__label" data-astro-cid-xb3inwvi> <span class="form__label-text" data-required="必須" data-astro-cid-xb3inwvi>お問い合わせ内容</span> <textarea class="form__textarea" name="message" placeholder="こちらにお問い合わせ内容をご記載ください。" required data-astro-cid-xb3inwvi></textarea> </label> </div> <label class="form__label form__label--checkbox" data-astro-cid-xb3inwvi> <input class="form__checkbox" type="checkbox" name="privacy" data-astro-cid-xb3inwvi> <span class="form__privacy" data-astro-cid-xb3inwvi> <a class="form__link"${addAttribute(`${baseUrl}privacy`, "href")} data-astro-cid-xb3inwvi>プライバシーポリシー</a>
に同意する</span> </label> <button class="form__button" type="submit" data-astro-cid-xb3inwvi> <p class="form__submit" data-astro-cid-xb3inwvi>この内容で送信する</p> </button> </div> </form> </div> ` })} `;
}, "/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/form.astro", void 0);
const $$file = "/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/form.astro";
const $$url = "/trust/form";

const _page = /*#__PURE__*/Object.freeze(/*#__PURE__*/Object.defineProperty({
  __proto__: null,
  default: $$Form,
  file: $$file,
  url: $$url
}, Symbol.toStringTag, { value: 'Module' }));

const page = () => _page;

export { page };
