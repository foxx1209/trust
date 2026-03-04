import '@astrojs/internal-helpers/path';
import 'kleur/colors';
import { x as NOOP_MIDDLEWARE_HEADER, y as decodeKey } from './chunks/astro/server_B8TvkcDz.mjs';
import 'clsx';
import 'cookie';
import 'es-module-lexer';
import 'html-escaper';

const NOOP_MIDDLEWARE_FN = async (_ctx, next) => {
  const response = await next();
  response.headers.set(NOOP_MIDDLEWARE_HEADER, "true");
  return response;
};

const codeToStatusMap = {
  // Implemented from IANA HTTP Status Code Registry
  // https://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml
  BAD_REQUEST: 400,
  UNAUTHORIZED: 401,
  PAYMENT_REQUIRED: 402,
  FORBIDDEN: 403,
  NOT_FOUND: 404,
  METHOD_NOT_ALLOWED: 405,
  NOT_ACCEPTABLE: 406,
  PROXY_AUTHENTICATION_REQUIRED: 407,
  REQUEST_TIMEOUT: 408,
  CONFLICT: 409,
  GONE: 410,
  LENGTH_REQUIRED: 411,
  PRECONDITION_FAILED: 412,
  CONTENT_TOO_LARGE: 413,
  URI_TOO_LONG: 414,
  UNSUPPORTED_MEDIA_TYPE: 415,
  RANGE_NOT_SATISFIABLE: 416,
  EXPECTATION_FAILED: 417,
  MISDIRECTED_REQUEST: 421,
  UNPROCESSABLE_CONTENT: 422,
  LOCKED: 423,
  FAILED_DEPENDENCY: 424,
  TOO_EARLY: 425,
  UPGRADE_REQUIRED: 426,
  PRECONDITION_REQUIRED: 428,
  TOO_MANY_REQUESTS: 429,
  REQUEST_HEADER_FIELDS_TOO_LARGE: 431,
  UNAVAILABLE_FOR_LEGAL_REASONS: 451,
  INTERNAL_SERVER_ERROR: 500,
  NOT_IMPLEMENTED: 501,
  BAD_GATEWAY: 502,
  SERVICE_UNAVAILABLE: 503,
  GATEWAY_TIMEOUT: 504,
  HTTP_VERSION_NOT_SUPPORTED: 505,
  VARIANT_ALSO_NEGOTIATES: 506,
  INSUFFICIENT_STORAGE: 507,
  LOOP_DETECTED: 508,
  NETWORK_AUTHENTICATION_REQUIRED: 511
};
Object.entries(codeToStatusMap).reduce(
  // reverse the key-value pairs
  (acc, [key, value]) => ({ ...acc, [value]: key }),
  {}
);

function sanitizeParams(params) {
  return Object.fromEntries(
    Object.entries(params).map(([key, value]) => {
      if (typeof value === "string") {
        return [key, value.normalize().replace(/#/g, "%23").replace(/\?/g, "%3F")];
      }
      return [key, value];
    })
  );
}
function getParameter(part, params) {
  if (part.spread) {
    return params[part.content.slice(3)] || "";
  }
  if (part.dynamic) {
    if (!params[part.content]) {
      throw new TypeError(`Missing parameter: ${part.content}`);
    }
    return params[part.content];
  }
  return part.content.normalize().replace(/\?/g, "%3F").replace(/#/g, "%23").replace(/%5B/g, "[").replace(/%5D/g, "]");
}
function getSegment(segment, params) {
  const segmentPath = segment.map((part) => getParameter(part, params)).join("");
  return segmentPath ? "/" + segmentPath : "";
}
function getRouteGenerator(segments, addTrailingSlash) {
  return (params) => {
    const sanitizedParams = sanitizeParams(params);
    let trailing = "";
    if (addTrailingSlash === "always" && segments.length) {
      trailing = "/";
    }
    const path = segments.map((segment) => getSegment(segment, sanitizedParams)).join("") + trailing;
    return path || "/";
  };
}

function deserializeRouteData(rawRouteData) {
  return {
    route: rawRouteData.route,
    type: rawRouteData.type,
    pattern: new RegExp(rawRouteData.pattern),
    params: rawRouteData.params,
    component: rawRouteData.component,
    generate: getRouteGenerator(rawRouteData.segments, rawRouteData._meta.trailingSlash),
    pathname: rawRouteData.pathname || void 0,
    segments: rawRouteData.segments,
    prerender: rawRouteData.prerender,
    redirect: rawRouteData.redirect,
    redirectRoute: rawRouteData.redirectRoute ? deserializeRouteData(rawRouteData.redirectRoute) : void 0,
    fallbackRoutes: rawRouteData.fallbackRoutes.map((fallback) => {
      return deserializeRouteData(fallback);
    }),
    isIndex: rawRouteData.isIndex,
    origin: rawRouteData.origin
  };
}

function deserializeManifest(serializedManifest) {
  const routes = [];
  for (const serializedRoute of serializedManifest.routes) {
    routes.push({
      ...serializedRoute,
      routeData: deserializeRouteData(serializedRoute.routeData)
    });
    const route = serializedRoute;
    route.routeData = deserializeRouteData(serializedRoute.routeData);
  }
  const assets = new Set(serializedManifest.assets);
  const componentMetadata = new Map(serializedManifest.componentMetadata);
  const inlinedScripts = new Map(serializedManifest.inlinedScripts);
  const clientDirectives = new Map(serializedManifest.clientDirectives);
  const serverIslandNameMap = new Map(serializedManifest.serverIslandNameMap);
  const key = decodeKey(serializedManifest.key);
  return {
    // in case user middleware exists, this no-op middleware will be reassigned (see plugin-ssr.ts)
    middleware() {
      return { onRequest: NOOP_MIDDLEWARE_FN };
    },
    ...serializedManifest,
    assets,
    componentMetadata,
    inlinedScripts,
    clientDirectives,
    routes,
    serverIslandNameMap,
    key
  };
}

const manifest = deserializeManifest({"hrefRoot":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/","cacheDir":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/node_modules/.astro/","outDir":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/","srcDir":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/src/","publicDir":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/public/","buildClientDir":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/client/","buildServerDir":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/server/","adapterName":"","routes":[{"file":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/ai/index.html","links":[],"scripts":[],"styles":[],"routeData":{"route":"/ai","isIndex":false,"type":"page","pattern":"^\\/ai\\/?$","segments":[[{"content":"ai","dynamic":false,"spread":false}]],"params":[],"component":"src/pages/ai.astro","pathname":"/ai","prerender":true,"fallbackRoutes":[],"distURL":[],"origin":"project","_meta":{"trailingSlash":"ignore"}}},{"file":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/btob/index.html","links":[],"scripts":[],"styles":[],"routeData":{"route":"/btob","isIndex":false,"type":"page","pattern":"^\\/btob\\/?$","segments":[[{"content":"btob","dynamic":false,"spread":false}]],"params":[],"component":"src/pages/btob.astro","pathname":"/btob","prerender":true,"fallbackRoutes":[],"distURL":[],"origin":"project","_meta":{"trailingSlash":"ignore"}}},{"file":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/column/index.html","links":[],"scripts":[],"styles":[],"routeData":{"route":"/column","isIndex":true,"type":"page","pattern":"^\\/column\\/?$","segments":[[{"content":"column","dynamic":false,"spread":false}]],"params":[],"component":"src/pages/column/index.astro","pathname":"/column","prerender":true,"fallbackRoutes":[],"distURL":[],"origin":"project","_meta":{"trailingSlash":"ignore"}}},{"file":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/company/index.html","links":[],"scripts":[],"styles":[],"routeData":{"route":"/company","isIndex":false,"type":"page","pattern":"^\\/company\\/?$","segments":[[{"content":"company","dynamic":false,"spread":false}]],"params":[],"component":"src/pages/company.astro","pathname":"/company","prerender":true,"fallbackRoutes":[],"distURL":[],"origin":"project","_meta":{"trailingSlash":"ignore"}}},{"file":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/download/index.html","links":[],"scripts":[],"styles":[],"routeData":{"route":"/download","isIndex":false,"type":"page","pattern":"^\\/download\\/?$","segments":[[{"content":"download","dynamic":false,"spread":false}]],"params":[],"component":"src/pages/download.astro","pathname":"/download","prerender":true,"fallbackRoutes":[],"distURL":[],"origin":"project","_meta":{"trailingSlash":"ignore"}}},{"file":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/download-form/index.html","links":[],"scripts":[],"styles":[],"routeData":{"route":"/download-form","isIndex":false,"type":"page","pattern":"^\\/download-form\\/?$","segments":[[{"content":"download-form","dynamic":false,"spread":false}]],"params":[],"component":"src/pages/download-form.astro","pathname":"/download-form","prerender":true,"fallbackRoutes":[],"distURL":[],"origin":"project","_meta":{"trailingSlash":"ignore"}}},{"file":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/form/index.html","links":[],"scripts":[],"styles":[],"routeData":{"route":"/form","isIndex":false,"type":"page","pattern":"^\\/form\\/?$","segments":[[{"content":"form","dynamic":false,"spread":false}]],"params":[],"component":"src/pages/form.astro","pathname":"/form","prerender":true,"fallbackRoutes":[],"distURL":[],"origin":"project","_meta":{"trailingSlash":"ignore"}}},{"file":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/privacy/index.html","links":[],"scripts":[],"styles":[],"routeData":{"route":"/privacy","isIndex":false,"type":"page","pattern":"^\\/privacy\\/?$","segments":[[{"content":"privacy","dynamic":false,"spread":false}]],"params":[],"component":"src/pages/privacy.astro","pathname":"/privacy","prerender":true,"fallbackRoutes":[],"distURL":[],"origin":"project","_meta":{"trailingSlash":"ignore"}}},{"file":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/single/index.html","links":[],"scripts":[],"styles":[],"routeData":{"route":"/single","isIndex":false,"type":"page","pattern":"^\\/single\\/?$","segments":[[{"content":"single","dynamic":false,"spread":false}]],"params":[],"component":"src/pages/single.astro","pathname":"/single","prerender":true,"fallbackRoutes":[],"distURL":[],"origin":"project","_meta":{"trailingSlash":"ignore"}}},{"file":"file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/index.html","links":[],"scripts":[],"styles":[],"routeData":{"route":"/","isIndex":true,"type":"page","pattern":"^\\/$","segments":[],"params":[],"component":"src/pages/index.astro","pathname":"/","prerender":true,"fallbackRoutes":[],"distURL":[],"origin":"project","_meta":{"trailingSlash":"ignore"}}}],"site":"https://hiro-fox.site/","base":"/trust/","trailingSlash":"ignore","compressHTML":true,"componentMetadata":[["\u0000astro:content",{"propagation":"in-tree","containsHead":false}],["/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/column/[blogId].astro",{"propagation":"in-tree","containsHead":true}],["\u0000@astro-page:src/pages/column/[blogId]@_@astro",{"propagation":"in-tree","containsHead":false}],["/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/column/[category]/index.astro",{"propagation":"in-tree","containsHead":true}],["\u0000@astro-page:src/pages/column/[category]/index@_@astro",{"propagation":"in-tree","containsHead":false}],["/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/column/[category]/page/[page].astro",{"propagation":"in-tree","containsHead":true}],["\u0000@astro-page:src/pages/column/[category]/page/[page]@_@astro",{"propagation":"in-tree","containsHead":false}],["/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/column/index.astro",{"propagation":"in-tree","containsHead":true}],["\u0000@astro-page:src/pages/column/index@_@astro",{"propagation":"in-tree","containsHead":false}],["/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/column/page/[page].astro",{"propagation":"in-tree","containsHead":true}],["\u0000@astro-page:src/pages/column/page/[page]@_@astro",{"propagation":"in-tree","containsHead":false}],["/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/index.astro",{"propagation":"in-tree","containsHead":true}],["\u0000@astro-page:src/pages/index@_@astro",{"propagation":"in-tree","containsHead":false}],["/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/ai.astro",{"propagation":"none","containsHead":true}],["/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/btob.astro",{"propagation":"none","containsHead":true}],["/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/company.astro",{"propagation":"none","containsHead":true}],["/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/download-form.astro",{"propagation":"none","containsHead":true}],["/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/download.astro",{"propagation":"none","containsHead":true}],["/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/form.astro",{"propagation":"none","containsHead":true}],["/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/privacy.astro",{"propagation":"none","containsHead":true}],["/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/single.astro",{"propagation":"none","containsHead":true}]],"renderers":[],"clientDirectives":[["idle","(()=>{var l=(n,t)=>{let i=async()=>{await(await n())()},e=typeof t.value==\"object\"?t.value:void 0,s={timeout:e==null?void 0:e.timeout};\"requestIdleCallback\"in window?window.requestIdleCallback(i,s):setTimeout(i,s.timeout||200)};(self.Astro||(self.Astro={})).idle=l;window.dispatchEvent(new Event(\"astro:idle\"));})();"],["load","(()=>{var e=async t=>{await(await t())()};(self.Astro||(self.Astro={})).load=e;window.dispatchEvent(new Event(\"astro:load\"));})();"],["media","(()=>{var n=(a,t)=>{let i=async()=>{await(await a())()};if(t.value){let e=matchMedia(t.value);e.matches?i():e.addEventListener(\"change\",i,{once:!0})}};(self.Astro||(self.Astro={})).media=n;window.dispatchEvent(new Event(\"astro:media\"));})();"],["only","(()=>{var e=async t=>{await(await t())()};(self.Astro||(self.Astro={})).only=e;window.dispatchEvent(new Event(\"astro:only\"));})();"],["visible","(()=>{var a=(s,i,o)=>{let r=async()=>{await(await s())()},t=typeof i.value==\"object\"?i.value:void 0,c={rootMargin:t==null?void 0:t.rootMargin},n=new IntersectionObserver(e=>{for(let l of e)if(l.isIntersecting){n.disconnect(),r();break}},c);for(let e of o.children)n.observe(e)};(self.Astro||(self.Astro={})).visible=a;window.dispatchEvent(new Event(\"astro:visible\"));})();"]],"entryModules":{"\u0000noop-middleware":"_noop-middleware.mjs","\u0000noop-actions":"_noop-actions.mjs","\u0000@astro-page:src/pages/ai@_@astro":"pages/ai.astro.mjs","\u0000@astro-page:src/pages/btob@_@astro":"pages/btob.astro.mjs","\u0000@astro-page:src/pages/column/page/[page]@_@astro":"pages/column/page/_page_.astro.mjs","\u0000@astro-page:src/pages/column/[category]/page/[page]@_@astro":"pages/column/_category_/page/_page_.astro.mjs","\u0000@astro-page:src/pages/column/[blogId]@_@astro":"pages/column/_blogid_.astro.mjs","\u0000@astro-page:src/pages/column/[category]/index@_@astro":"pages/column/_category_.astro.mjs","\u0000@astro-page:src/pages/column/index@_@astro":"pages/column.astro.mjs","\u0000@astro-page:src/pages/company@_@astro":"pages/company.astro.mjs","\u0000@astro-page:src/pages/download@_@astro":"pages/download.astro.mjs","\u0000@astro-page:src/pages/download-form@_@astro":"pages/download-form.astro.mjs","\u0000@astro-page:src/pages/form@_@astro":"pages/form.astro.mjs","\u0000@astro-page:src/pages/privacy@_@astro":"pages/privacy.astro.mjs","\u0000@astro-page:src/pages/single@_@astro":"pages/single.astro.mjs","\u0000@astro-page:src/pages/index@_@astro":"pages/index.astro.mjs","\u0000@astro-renderers":"renderers.mjs","\u0000@astrojs-manifest":"manifest_CvvoeAlS.mjs","/Users/mizukawahiroshikana/Desktop/trust/hp/node_modules/astro/dist/assets/services/sharp.js":"chunks/sharp_B9_jNLAq.mjs","/Users/mizukawahiroshikana/Desktop/trust/hp/.astro/content-assets.mjs":"chunks/content-assets_DleWbedO.mjs","/Users/mizukawahiroshikana/Desktop/trust/hp/.astro/content-modules.mjs":"chunks/content-modules_Dz-S_Wwv.mjs","\u0000astro:data-layer-content":"chunks/_astro_data-layer-content_BcqQk-iY.mjs","/Users/mizukawahiroshikana/Desktop/trust/hp/src/layouts/Layout.astro?astro&type=script&index=0&lang.ts":"_astro/Layout.astro_astro_type_script_index_0_lang.DNBNSznK.js","/Users/mizukawahiroshikana/Desktop/trust/hp/src/components/GlobalHeader.astro?astro&type=script&index=0&lang.ts":"_astro/GlobalHeader.astro_astro_type_script_index_0_lang.SUI1m4cH.js","astro:scripts/page.js":"_astro/page.7qqag-5g.js","astro:scripts/before-hydration.js":""},"inlinedScripts":[["/Users/mizukawahiroshikana/Desktop/trust/hp/src/layouts/Layout.astro?astro&type=script&index=0&lang.ts","(function(){const t=document.querySelector('meta[name=\"viewport\"]');function e(){const i=window.outerWidth>375?\"width=device-width,initial-scale=1\":\"width=375\";t?.getAttribute(\"content\")!==i&&t?.setAttribute(\"content\",i)}addEventListener(\"resize\",e,!1),e()})();"],["/Users/mizukawahiroshikana/Desktop/trust/hp/src/components/GlobalHeader.astro?astro&type=script&index=0&lang.ts","const n=document.querySelectorAll(\".header__btn-line\"),e=document.querySelector(\".header__nav-sp\"),t=document.querySelector(\".header__btn\");t&&e&&t.addEventListener(\"click\",()=>{n.forEach(c=>{c.classList.toggle(\"is-active\")}),e.classList.toggle(\"is-active\")});"]],"assets":["/trust/_astro/page.7qqag-5g.js","/trust/file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/ai/index.html","/trust/file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/btob/index.html","/trust/file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/column/index.html","/trust/file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/company/index.html","/trust/file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/download/index.html","/trust/file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/download-form/index.html","/trust/file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/form/index.html","/trust/file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/privacy/index.html","/trust/file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/single/index.html","/trust/file:///Users/mizukawahiroshikana/Desktop/trust/hp/trust/index.html","/~partytown/partytown-atomics.js","/~partytown/partytown-media.js","/~partytown/partytown-sw.js","/~partytown/partytown.js"],"buildFormat":"directory","checkOrigin":false,"serverIslandNameMap":[],"key":"AfnXIAnVvWjKRV0JXcIcHfTdCFApUDz5QFUyCI0b58o="});
if (manifest.sessionConfig) manifest.sessionConfig.driverModule = null;

export { manifest };
