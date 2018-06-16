@extends('layouts.app')

@section('content')
<div class="Pane Pane--cropMax Pane--underSiteNav Pane--noInnerSpacing" data-url="/cms/template_resource/W3VSUPP3C5721479495651600.jpg" queryselectoralways="33">
    <div class="Pane-bg" style="background-color:#080812;background-image:url(&quot;/cms/template_resource/W3VSUPP3C5721479495651600.jpg&quot;);">
        <div class="Pane-overlay"></div>
    </div>
    <div class="Pane-content">
        <div class="space-medium"></div>
        <div class="contain-max">
            <div class="gutter-large" media-wide="!gutter-normal gutter-large" queryselectoralways="0" media-original="gutter-normal">
                @include('characters.block.space-bar')
            <div class="space-small"></div>@include('characters.block.menu')<div class="space-small"></div><div class="Divider Divider--opaque Divider--thin"></div></div></div><div class="space-normal"></div><div class="contain-max"><div class="gutter-large" media-wide="!gutter-normal gutter-large" queryselectoralways="0" media-original="gutter-normal"><div class="font-semp-small-white text-upper inline">PvP</div><div class="space-normal"></div><div class="Grid Grid--gutters SyncHeight" queryselectoralways="45"><div class="Grid-1of2 Grid-1of3" media-large="Grid-1of3" media-huge="Grid-1of6" queryselectoralways="0" media-original="Grid-1of2"><div class="Box Box--flush Box--borderGrey Box--leatherGrey SyncHeight-item position-relative align-center" style="height: 206px;"><div class="space-small"></div><div class="contain-center hide" style="max-width:100px;" media-medium="hide" queryselectoralways="0" media-original="contain-center"><div class="Art Art--above" queryselectoralways="4"><div class="Art-size" style="padding-top:100%"></div><div class="Art-image" style="background-image:url(/cms/template_resource/3N9RFI7MR4871478907064695.png);"></div><div class="Art-overlay"></div></div></div><div class="contain-center" style="max-width:128px;" media-medium="!hide" queryselectoralways="0" media-original="contain-center hide"><div class="Art Art--above" queryselectoralways="4"><div class="Art-size" style="padding-top:100%"></div><div class="Art-image" style="background-image:url(/cms/template_resource/3N9RFI7MR4871478907064695.png);"></div><div class="Art-overlay"></div></div></div><div class="font-bliz-light-medium-white">Уровень престижа</div><div class="space-tiny"></div><div class="font-semp-xSmall-white text-upper">Уровень: {{ $char->prestigeLevel }}</div><div class="space-normal"></div></div></div><div class="Grid-1of2 Grid-1of3" media-large="Grid-1of3" media-huge="Grid-1of6" queryselectoralways="0" media-original="Grid-1of2"><div class="Box Box--flush Box--borderGrey Box--leatherGrey SyncHeight-item position-relative align-center" style="height: 206px;"><div class="space-small"></div><div class="contain-center hide" style="max-width:100px;" media-medium="hide" queryselectoralways="0" media-original="contain-center"><div class="Art Art--above" queryselectoralways="4"><div class="Art-size" style="padding-top:100%"></div><div class="Art-image" style="background-image:url(/cms/template_resource/{{ $char->side }}.png);"></div><div class="Art-overlay"></div></div></div><div class="contain-center" style="max-width:128px;" media-medium="!hide" queryselectoralways="0" media-original="contain-center hide"><div class="Art Art--above" queryselectoralways="4"><div class="Art-size" style="padding-top:100%"></div><div class="Art-image" style="background-image:url(/cms/template_resource/{{ $char->side }}.png);"></div><div class="Art-overlay"></div></div></div><div class="font-bliz-light-medium-white">Очки чести</div><div class="space-tiny"></div><div class="font-semp-xSmall-white text-upper">Уровень: {{ $char->honorLevel }}</div><div class="space-normal"></div></div></div><div class="Grid-1of2 Grid-1of3" media-large="Grid-1of3" media-huge="Grid-1of6" queryselectoralways="0" media-original="Grid-1of2"><div class="Box Box--flush Box--borderGrey Box--leatherGrey SyncHeight-item position-relative align-center" style="height: 206px;"><div class="space-small"></div><div class="contain-center hide" style="max-width:100px;" media-medium="hide" queryselectoralways="0" media-original="contain-center"><div class="Art Art--above" queryselectoralways="4"><div class="Art-size" style="padding-top:100%"></div><div class="Art-image" style="background-image:url(/cms/template_resource/8T1RRX8QDSII1488401955399.png);"></div><div class="Art-overlay"></div></div></div><div class="contain-center" style="max-width:128px;" media-medium="!hide" queryselectoralways="0" media-original="contain-center hide"><div class="Art Art--above" queryselectoralways="4"><div class="Art-size" style="padding-top:100%"></div><div class="Art-image" style="background-image:url(/cms/template_resource/8T1RRX8QDSII1488401955399.png);"></div><div class="Art-overlay"></div></div></div><div class="font-bliz-light-medium-white">Почетные победы</div><div class="space-tiny"></div><div class="font-semp-xSmall-white text-upper">{{ $char->totalKills }}</div><div class="space-normal"></div></div></div><div class="Grid-1of2 Grid-1of3" media-large="Grid-1of3" media-huge="Grid-1of6" queryselectoralways="0" media-original="Grid-1of2"><div class="Box Box--flush Box--borderGrey Box--leatherGrey Box--hover SyncHeight-item position-relative align-center" style="height: 206px;"><div class="space-small"></div><a class="Link Link--block" data-modal="pvp-rating-stats-modal" data-modal-analytics-type="PvP Statistic" data-tooltip="tooltip-pvp-stat-2v2" queryselectoralways="29"><div class="Chakram Chakram--pvpFrame contain-center Chakram--textSmall" media-medium="!Chakram--textTiny !Chakram--small Chakram--textSmall" queryselectoralways="0" media-original="Chakram Chakram--small Chakram--pvpFrame Chakram--textTiny contain-center"><div class="Chakram-text">0</div></div></a><div class="Modal Modal--modalCompact" data-modal="pvp-rating-stats-modal" data-analytics-type="PvP Statistic" style="display: none;" queryselectoralways="27"><div class="Modal-back" title="Назад"><div class="List"><div class="List-item"><span class="Icon Icon--back Icon--small Modal-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"><use xlink:href="/static/components/Icon/Icon.svg#back"></use></svg></span></div><div class="List-item"><div class="Modal-backText">Назад</div></div></div></div><div class="Modal-close" data-izimodal-close="data-izimodal-close"><span class="Icon Icon--close Icon--small Modal-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"><use xlink:href="/static/components/Icon/Icon.svg#close"></use></svg></span></div><div class="" media-wide="!hide" queryselectoralways="0" media-original="hide"><div class="SortTable SortTable--stretch" queryselectoralways="43" style=""><div class="SortTable-head"><div class="SortTable-row"><div class="SortTable-col SortTable-label SortTable-label--left" data-priority="1" name="name"><div class="SortTable-labelOuter"><div class="SortTable-labelInner"><div class="SortTable-labelText"><span>Seasonal Match History</span></div></div></div></div><div class="SortTable-col SortTable-label" data-priority="3" name="games"><div class="SortTable-labelOuter"><div class="SortTable-labelInner"><div class="SortTable-labelText"><span>Игр</span></div></div></div></div><div class="SortTable-col SortTable-label" data-priority="2" name="win"><div class="SortTable-labelOuter"><div class="SortTable-labelInner"><div class="SortTable-labelText"><span>Побед</span></div></div></div></div><div class="SortTable-col SortTable-label" data-priority="2" name="winLoss"><div class="SortTable-labelOuter"><div class="SortTable-labelInner"><div class="SortTable-labelText"><span>% побед</span></div></div></div></div></div></div><div class="SortTable-body"><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">2x2</div></div><div class="SortTable-col SortTable-data align-center" data-value="0"><div class="font-bliz-light-xSmall-white">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white color-win">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white gutter-small">-</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">3x3</div></div><div class="SortTable-col SortTable-data align-center" data-value="0"><div class="font-bliz-light-xSmall-white">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white color-win">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white gutter-small">-</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Поля боя</div></div><div class="SortTable-col SortTable-data align-center" data-value="0"><div class="font-bliz-light-xSmall-white">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white color-win">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white gutter-small">-</div></div></div></div></div></div><div media-wide="hide" queryselectoralways="0" media-original="" class="hide" style=""><div class="space-normal"></div><div class="font-bliz-light-small-lightGold">2x2</div><div class="space-small"></div><div class="SortTable SortTable--stretch" queryselectoralways="43" style=""><div class="SortTable-body"><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Games</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Wins</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white color-win align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Win %</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">-</div></div></div></div></div><div class="space-normal"></div><div class="font-bliz-light-small-lightGold">3x3</div><div class="space-small"></div><div class="SortTable SortTable--stretch" queryselectoralways="43" style=""><div class="SortTable-body"><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Games</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Wins</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white color-win align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Win %</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">-</div></div></div></div></div><div class="space-normal"></div><div class="font-bliz-light-small-lightGold">Поля боя</div><div class="space-small"></div><div class="SortTable SortTable--stretch" queryselectoralways="43" style=""><div class="SortTable-body"><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Games</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Wins</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white color-win align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Win %</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">-</div></div></div></div></div></div></div><div class="font-bliz-light-medium-lightGold">2x2</div><div class="space-tiny"></div><div class="font-semp-xSmall-white text-upper">Рейтинг</div><div class="space-normal"></div></div></div><div class="Grid-1of2 Grid-1of3" media-large="Grid-1of3" media-huge="Grid-1of6" queryselectoralways="0" media-original="Grid-1of2"><div class="Box Box--flush Box--borderGrey Box--leatherGrey Box--hover SyncHeight-item position-relative align-center" style="height: 206px;"><div class="space-small"></div><a class="Link Link--block" data-modal="pvp-rating-stats-modal" data-modal-analytics-type="PvP Statistic" data-tooltip="tooltip-pvp-stat-3v3" queryselectoralways="29"><div class="Chakram Chakram--pvpFrame contain-center Chakram--textSmall" media-medium="!Chakram--textTiny !Chakram--small Chakram--textSmall" queryselectoralways="0" media-original="Chakram Chakram--small Chakram--pvpFrame Chakram--textTiny contain-center"><div class="Chakram-text">0</div></div></a><div class="Modal Modal--modalCompact" data-modal="pvp-rating-stats-modal" data-analytics-type="PvP Statistic" style="display: none;" queryselectoralways="27"><div class="Modal-back" title="Назад"><div class="List"><div class="List-item"><span class="Icon Icon--back Icon--small Modal-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"><use xlink:href="/static/components/Icon/Icon.svg#back"></use></svg></span></div><div class="List-item"><div class="Modal-backText">Назад</div></div></div></div><div class="Modal-close" data-izimodal-close="data-izimodal-close"><span class="Icon Icon--close Icon--small Modal-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"><use xlink:href="/static/components/Icon/Icon.svg#close"></use></svg></span></div><div class="" media-wide="!hide" queryselectoralways="0" media-original="hide"><div class="SortTable SortTable--stretch" queryselectoralways="43" style=""><div class="SortTable-head"><div class="SortTable-row"><div class="SortTable-col SortTable-label SortTable-label--left" data-priority="1" name="name"><div class="SortTable-labelOuter"><div class="SortTable-labelInner"><div class="SortTable-labelText"><span>Seasonal Match History</span></div></div></div></div><div class="SortTable-col SortTable-label" data-priority="3" name="games"><div class="SortTable-labelOuter"><div class="SortTable-labelInner"><div class="SortTable-labelText"><span>Игр</span></div></div></div></div><div class="SortTable-col SortTable-label" data-priority="2" name="win"><div class="SortTable-labelOuter"><div class="SortTable-labelInner"><div class="SortTable-labelText"><span>Побед</span></div></div></div></div><div class="SortTable-col SortTable-label" data-priority="2" name="winLoss"><div class="SortTable-labelOuter"><div class="SortTable-labelInner"><div class="SortTable-labelText"><span>% побед</span></div></div></div></div></div></div><div class="SortTable-body"><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">2x2</div></div><div class="SortTable-col SortTable-data align-center" data-value="0"><div class="font-bliz-light-xSmall-white">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white color-win">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white gutter-small">-</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">3x3</div></div><div class="SortTable-col SortTable-data align-center" data-value="0"><div class="font-bliz-light-xSmall-white">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white color-win">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white gutter-small">-</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Поля боя</div></div><div class="SortTable-col SortTable-data align-center" data-value="0"><div class="font-bliz-light-xSmall-white">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white color-win">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white gutter-small">-</div></div></div></div></div></div><div media-wide="hide" queryselectoralways="0" media-original="" class="hide" style=""><div class="space-normal"></div><div class="font-bliz-light-small-lightGold">2x2</div><div class="space-small"></div><div class="SortTable SortTable--stretch" queryselectoralways="43" style=""><div class="SortTable-body"><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Games</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Wins</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white color-win align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Win %</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">-</div></div></div></div></div><div class="space-normal"></div><div class="font-bliz-light-small-lightGold">3x3</div><div class="space-small"></div><div class="SortTable SortTable--stretch" queryselectoralways="43" style=""><div class="SortTable-body"><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Games</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Wins</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white color-win align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Win %</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">-</div></div></div></div></div><div class="space-normal"></div><div class="font-bliz-light-small-lightGold">Поля боя</div><div class="space-small"></div><div class="SortTable SortTable--stretch" queryselectoralways="43" style=""><div class="SortTable-body"><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Games</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Wins</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white color-win align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Win %</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">-</div></div></div></div></div></div></div><div class="font-bliz-light-medium-lightGold">3x3</div><div class="space-tiny"></div><div class="font-semp-xSmall-white text-upper">Рейтинг</div><div class="space-normal"></div></div></div><div class="Grid-1of2 Grid-1of3" media-large="Grid-1of3" media-huge="Grid-1of6" queryselectoralways="0" media-original="Grid-1of2"><div class="Box Box--flush Box--borderGrey Box--leatherGrey Box--hover SyncHeight-item position-relative align-center" style="height: 206px;"><div class="space-small"></div><a class="Link Link--block" data-modal="pvp-rating-stats-modal" data-modal-analytics-type="PvP Statistic" data-tooltip="tooltip-pvp-stat-rbgs" queryselectoralways="29"><div class="Chakram Chakram--pvpFrame contain-center Chakram--textSmall" media-medium="!Chakram--textTiny !Chakram--small Chakram--textSmall" queryselectoralways="0" media-original="Chakram Chakram--small Chakram--pvpFrame Chakram--textTiny contain-center"><div class="Chakram-text">0</div></div></a><div class="Modal Modal--modalCompact" data-modal="pvp-rating-stats-modal" data-analytics-type="PvP Statistic" style="display: none;" queryselectoralways="27"><div class="Modal-back" title="Назад"><div class="List"><div class="List-item"><span class="Icon Icon--back Icon--small Modal-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"><use xlink:href="/static/components/Icon/Icon.svg#back"></use></svg></span></div><div class="List-item"><div class="Modal-backText">Назад</div></div></div></div><div class="Modal-close" data-izimodal-close="data-izimodal-close"><span class="Icon Icon--close Icon--small Modal-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"><use xlink:href="/static/components/Icon/Icon.svg#close"></use></svg></span></div><div class="" media-wide="!hide" queryselectoralways="0" media-original="hide"><div class="SortTable SortTable--stretch" queryselectoralways="43" style=""><div class="SortTable-head"><div class="SortTable-row"><div class="SortTable-col SortTable-label SortTable-label--left" data-priority="1" name="name"><div class="SortTable-labelOuter"><div class="SortTable-labelInner"><div class="SortTable-labelText"><span>Seasonal Match History</span></div></div></div></div><div class="SortTable-col SortTable-label" data-priority="3" name="games"><div class="SortTable-labelOuter"><div class="SortTable-labelInner"><div class="SortTable-labelText"><span>Игр</span></div></div></div></div><div class="SortTable-col SortTable-label" data-priority="2" name="win"><div class="SortTable-labelOuter"><div class="SortTable-labelInner"><div class="SortTable-labelText"><span>Побед</span></div></div></div></div><div class="SortTable-col SortTable-label" data-priority="2" name="winLoss"><div class="SortTable-labelOuter"><div class="SortTable-labelInner"><div class="SortTable-labelText"><span>% побед</span></div></div></div></div></div></div><div class="SortTable-body"><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">2x2</div></div><div class="SortTable-col SortTable-data align-center" data-value="0"><div class="font-bliz-light-xSmall-white">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white color-win">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white gutter-small">-</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">3x3</div></div><div class="SortTable-col SortTable-data align-center" data-value="0"><div class="font-bliz-light-xSmall-white">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white color-win">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white gutter-small">-</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Поля боя</div></div><div class="SortTable-col SortTable-data align-center" data-value="0"><div class="font-bliz-light-xSmall-white">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white color-win">0</div></div><div class="SortTable-col SortTable-data align-center text-nowrap" data-value="0"><div class="font-bliz-light-xSmall-white gutter-small">-</div></div></div></div></div></div><div media-wide="hide" queryselectoralways="0" media-original="" class="hide" style=""><div class="space-normal"></div><div class="font-bliz-light-small-lightGold">2x2</div><div class="space-small"></div><div class="SortTable SortTable--stretch" queryselectoralways="43" style=""><div class="SortTable-body"><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Games</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Wins</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white color-win align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Win %</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">-</div></div></div></div></div><div class="space-normal"></div><div class="font-bliz-light-small-lightGold">3x3</div><div class="space-small"></div><div class="SortTable SortTable--stretch" queryselectoralways="43" style=""><div class="SortTable-body"><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Games</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Wins</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white color-win align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Win %</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">-</div></div></div></div></div><div class="space-normal"></div><div class="font-bliz-light-small-lightGold">Поля боя</div><div class="space-small"></div><div class="SortTable SortTable--stretch" queryselectoralways="43" style=""><div class="SortTable-body"><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Games</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Wins</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white color-win align-right">0</div></div></div><div class="SortTable-row"><div class="SortTable-col SortTable-data"><div class="font-size-small color-beige-medium">Win %</div></div><div class="SortTable-col SortTable-data"><div class="font-bliz-light-xSmall-white align-right">-</div></div></div></div></div></div></div><div class="font-bliz-light-medium-lightGold">Поля боя</div><div class="space-tiny"></div><div class="font-semp-xSmall-white text-upper">Рейтинг</div><div class="space-normal"></div></div></div></div><div class="space-medium"></div><div class="font-semp-small-white text-upper inline">Полная история рейтинговых боев</div><div class="space-normal"></div><div class="contain-max"><div class="font-bliz-light-small-white">На полях боя герои Альянса и Орды ведут извечную борьбу за ресурсы и контроль над стратегически важными точками. Здесь жива память о подвигах храбрецов, которые встали на защиту своей фракции и оставили свой след в истории.</div></div><div class="space-huge"></div></div></div></div></div>
@endsection