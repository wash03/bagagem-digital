<template>
<div id="services">
    <div class="container" id="session-1">
        <img class="mx-auto d-block" id="hr" src="../static/img/hr.svg" alt="hr">
        <h2>{{ $t('servicesTitle') }}</h2>
        <p id="subtitle" class="text-center">{{ $t('servicesSubtitle') }}</p>
        <div class="row lines-services">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <img class="mx-auto d-block" src="../static/img/criacao-de-sites.svg" :alt="$t('criacaoSitesTitle')">
                <h3 class="col-title">{{ $t('criacaoSitesTitle') }}</h3>
                <p>{{ $t('criacaoSitesText') }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <img class="mx-auto d-block" src="../static/img/trafego-pago.svg" :alt="$t('trafegoPagoTitle')">
                <h3 class="col-title">{{ $t('trafegoPagoTitle') }}</h3>
                <p>{{ $t('trafegoPagoText') }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <img class="mx-auto d-block" src="../static/img/redes-sociais.svg" :alt="$t('redesSociaisTitle')">
                <h3 class="col-title">{{ $t('redesSociaisTitle') }}</h3>
                <p>{{ $t('redesSociaisText') }}</p>
            </div>
        </div>
        <div class="row line-2 lines-services">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <img class="mx-auto d-block" src="../static/img/identidade-visual.svg" alt="Identidade visual">
                <h3 class="col-title">{{ $t('identidadeVisualTitle') }}</h3>
                <p class="justify">{{ $t('identidadeVisualText') }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <img class="mx-auto d-block" src="../static/img/videos.svg" alt="Vídeos">
                <h3 class="col-title">{{ $t('videosTitle') }}</h3>
                <p>{{ $t('videosText') }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <img class="mx-auto d-block" src="../static/img/ecommerce.svg" alt="ecommerce">
                <h3 class="col-title">{{ $t('ecommerceTitle') }}</h3>
                <p>{{ $t('ecommerceText') }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <button class="form-bagagem-btn" @click="scroll('contato')">{{ $t('servicesButton') }}</button>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    methods: {
        scroll(id) {  
            document.getElementById(id).scrollIntoView({
                behavior: "smooth"
            });
        }
    },
}
</script>