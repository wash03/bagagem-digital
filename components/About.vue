<template>
    <div id="about">
        <div class="container" id="session-about">
            <img class="background-right" src="../static/img/background-right.png" alt="background-right">
            <img class="mx-auto d-block" id="hr" src="../static/img/hr-branco.svg" alt="hr">
            <h2>{{ $t('institucionalTitle') }}</h2>
            <p id="subtitle-about" class="text-center">{{ $t('institucionalSubtitle') }}</p>
            <div class="row">
                <div class="col-md-12 text-center">
                    <img id="pc" src="../static/img/pc.png" alt="pc">
                    <b-embed type="video" aspect="16by9" controls poster="../static/img/capa-video-inst.png">
                        <source src="../static/video/bagagem-digital.mp4" type="video/mp4">
                    </b-embed>
                </div>
            </div>
        </div>
    </div>
</template>