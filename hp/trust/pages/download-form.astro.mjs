import { c as createComponent, r as renderComponent, a as renderTemplate, m as maybeRenderHead, d as addAttribute } from '../chunks/astro/server_B8TvkcDz.mjs';
import 'kleur/colors';
import { $ as $$Layout } from '../chunks/Layout_FCQTlo12.mjs';
import { $ as $$SubFv } from '../chunks/sub-fv_BI5OrUUL.mjs';
/* empty css                                         */
export { renderers } from '../renderers.mjs';

const $$DownloadForm = createComponent(($$result, $$props, $$slots) => {
  const baseUrl = "/trust/";
  return renderTemplate`${renderComponent($$result, "Layout", $$Layout, { "title": "資料ダウンロード | Nexus Strategy", "description": "サービス資料のダウンロードはこちらから", "data-astro-cid-5cijajm6": true }, { "default": ($$result2) => renderTemplate` ${renderComponent($$result2, "SubFv", $$SubFv, { "title": "資料ダウンロード", "titleEn": "Materials Download", "data-astro-cid-5cijajm6": true })} ${maybeRenderHead()}<div class="inner" data-astro-cid-5cijajm6> <form class="form" action="post" data-astro-cid-5cijajm6> <div class="form__inner" data-astro-cid-5cijajm6> <p class="form__title" data-astro-cid-5cijajm6>サービス資料ダウンロード</p> <p class="form__text" data-astro-cid-5cijajm6>資料をご希望の方はフォームに<br class="u-sp" data-astro-cid-5cijajm6>入力のうえ送信してください。<br data-astro-cid-5cijajm6>送信完了画面または<br class="u-sp" data-astro-cid-5cijajm6>登録アドレスに届くメールから<br class="u-sp" data-astro-cid-5cijajm6>ダウンロードできます。</p> <div class="form__content" data-astro-cid-5cijajm6> <label class="form__label" data-astro-cid-5cijajm6> <span class="form__label-text" data-required="必須" data-astro-cid-5cijajm6>会社名</span> <input class="form__input" type="text" name="company" placeholder="株式会社Trust Link" autocomplete="organization" required data-astro-cid-5cijajm6> </label> <label class="form__label" data-astro-cid-5cijajm6> <span class="form__label-text" data-required="必須" data-astro-cid-5cijajm6>名前</span> <input class="form__input" type="text" name="name" placeholder="山田 太郎" autocomplete="name" required data-astro-cid-5cijajm6> </label> <label class="form__label" data-astro-cid-5cijajm6> <span class="form__label-text" data-required="必須" data-astro-cid-5cijajm6>電話番号</span> <input class="form__input" type="tel" name="tel" placeholder="080-0000-0000" autocomplete="tel" required data-astro-cid-5cijajm6> </label> <label class="form__label" data-astro-cid-5cijajm6> <span class="form__label-text" data-required="必須" data-astro-cid-5cijajm6>メールアドレス</span> <input class="form__input" type="email" name="email" placeholder="trust_link@sample.jp" autocomplete="email" required data-astro-cid-5cijajm6> </label> </div> <label class="form__label form__label--checkbox" data-astro-cid-5cijajm6> <input class="form__checkbox" type="checkbox" name="privacy" data-astro-cid-5cijajm6> <span class="form__privacy" data-astro-cid-5cijajm6> <a class="form__link"${addAttribute(`${baseUrl}privacy`, "href")} data-astro-cid-5cijajm6>プライバシーポリシー</a>
に同意する</span> </label> <button class="form__button" type="submit" data-astro-cid-5cijajm6> <p class="form__submit" data-astro-cid-5cijajm6>資料をダウンロードする</p> </button> </div> </form> </div> ` })} `;
}, "/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/download-form.astro", void 0);
const $$file = "/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/download-form.astro";
const $$url = "/trust/download-form";

const _page = /*#__PURE__*/Object.freeze(/*#__PURE__*/Object.defineProperty({
  __proto__: null,
  default: $$DownloadForm,
  file: $$file,
  url: $$url
}, Symbol.toStringTag, { value: 'Module' }));

const page = () => _page;

export { page };
