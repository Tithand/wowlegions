<!DOCTYPE html><html lang="ru-RU"><head><title>World of Warcraft</title><base href="/{{ app()->getLocale() }}/"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><meta property="fb:app_id" content="175314325675"/><meta property="og:site_name" content="World of Warcraft"/><meta property="og:title" content="World of Warcraft"/><meta property="og:image" content="http://bnetcmsus-a.akamaihd.net/cms/template_resource/fh/FHSCSCG9CXOC1462229977849.png"/><meta property="og:description" content="World of Warcraft"/><meta property="og:url" content="{{ route('home') }}"/><meta name="twitter:card" content="summary"/><meta name="twitter:site" content="@warcraft"/><link rel="search" href="/opensearch/opensearch.xml" title="Поиск по World of Warcraft" type="application/opensearchdescription+xml"><link rel="stylesheet" href="{{ asset('static/styles/navbar.css') }}"><link rel="stylesheet" href="{{ asset('static/styles/photoswipe.css') }}"><link rel="stylesheet" href="{{ asset('static/styles/izimodal.css') }}"><link rel="stylesheet" href="{{ asset('static/styles/wow.css') }}">@yield('css')<script src="{{ asset('static/scripts/core.js') }}"></script></head><body class="{{ app()->getLocale() }}"><script>var dataLayer = dataLayer || [];dataLayer.push({"locale":"ru-RU","region":"eu","project":"wow","authenticated":"0","localeRegion":"eu"});</script>@yield('blogjs')<div class="body"><script id="init">window.trigger("init");</script><div class="page">@include('layouts.navbar.mobile')@include('layouts.navbar.pc')@yield('content')<div class="Pane Pane--dirtLight Pane--bgBottom bordered"><div class="Pane-bg"><div class="Pane-overlay"></div></div><div class="Pane-content"><div class="gutter-normal gutter-vertical"><div class="SocialLinks SocialLinks--wow"><div class="SocialLinks-title">Warcraft в соцсетях</div><div class="SocialLinks-links"><a class="Link SocialLinks-link" href="https://vk.com/elis_grimm" data-analytics="sns-refer" data-analytics-placement="Footer - vkontakte"><span class="Icon Icon--social-vkontakte Icon--medium SocialLinks-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"><use xlink:href="/static/components/Icon/Icon.svg#social-vkontakte"></use></svg></span></a></div></div></div></div></div>@include('layouts.footer')</div></div><div class="Photoswipe pswp Photoswipe--modal Photoswipe--wow" name="modal" tabindex="-1" role="dialog" aria-hidden="true"><div class="pswp__bg"></div><div class="pswp__scroll-wrap"><div class="pswp__container"><div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"><div class="pswp__top-bar Photoswipe-top"><div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Закрыть (Esc)"></button><button class="pswp__button pswp__button--share" title="Поделиться"></button><button class="pswp__button pswp__button--fs" title="Во весь экран"></button><button class="pswp__button pswp__button--zoom" title="Увеличить/уменьшить масштаб"></button><div class="pswp__preloader"><div class="pswp__preloader__icn"><div class="pswp__preloader__cut"><div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"><div class="pswp__share-tooltip"></div></div><div class="pswp__caption"><div class="pswp__caption__center"></div></div><button class="pswp__button pswp__button--arrow--left" title="Назад (стрелка влево)"></button><button class="pswp__button pswp__button--arrow--right" title="Далее (стрелка вправо)"></button><div class="Photoswipe-prev" title="Назад (стрелка влево)"><span class="Icon Icon--prev"></span></div><div class="Photoswipe-next" title="Далее (стрелка вправо)"><span class="Icon Icon--next"></span></div></div></div></div><div class="Photoswipe pswp Photoswipe--lightbox Photoswipe--wow" name="lightbox" tabindex="-1" role="dialog" aria-hidden="true"><div class="pswp__bg"></div><div class="pswp__scroll-wrap"><div class="pswp__container"><div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"><div class="pswp__top-bar Photoswipe-top"><div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Закрыть (Esc)"></button><button class="pswp__button pswp__button--share" title="Поделиться"></button><button class="pswp__button pswp__button--fs" title="Во весь экран"></button><button class="pswp__button pswp__button--zoom" title="Увеличить/уменьшить масштаб"></button><div class="pswp__preloader"><div class="pswp__preloader__icn"><div class="pswp__preloader__cut"><div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"><div class="pswp__share-tooltip"></div></div><div class="pswp__caption"><div class="pswp__caption__center"></div></div><button class="pswp__button pswp__button--arrow--left" title="Назад (стрелка влево)"></button><button class="pswp__button pswp__button--arrow--right" title="Далее (стрелка вправо)"></button><div class="Photoswipe-prev" title="Назад (стрелка влево)"><span class="Icon Icon--prev"></span></div><div class="Photoswipe-next" title="Далее (стрелка вправо)"><span class="Icon Icon--next"></span></div></div></div></div><script src="https://worldofwarcraft.akamaized.net/static/scripts/components.js?v=4.23.0"></script><script src="https://worldofwarcraft.akamaized.net/static/scripts/navbar.js?v=4.23.0"></script>@yield('js')</body></html>