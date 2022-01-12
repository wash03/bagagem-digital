<template>
    <div class="container" id="header">

        <header id="header-nav">
            <nav id="nav">
            <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
                <span id="hamburger"></span>
            </button>
            <ul id="menu-nav-bg" class="float-right navbar-nav" role="menu">
                 <li class="nav-item">
                    <img src="../static/img/logo-footer.png" id="logo" alt="bagagem.png">
                </li>
                <li class="nav-item">
                    <a class="nav-link" @click="scroll('header')">{{ $t('menuInicio') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @click="scroll('services')">{{ $t('menuServicos') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @click="scroll('portfolio')">{{ $t('menuPortfolio') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @click="scroll('contato')">{{ $t('menuContato') }}</a>
                </li>
                <b-nav-item-dropdown
                    id="change-language"
                    toggle-class="nav-link-custom"
                    text="language"
                    right
                >
                    <template slot="button-content">
                        <img :src="urlFlag" alt="flag">
                    </template>
                    <div>
                        <p id="select-lang-title">Country Website:</p>
                        <b-form-select v-model="$i18n.locale" :options="options" class="mb-4" id="select">
                        </b-form-select>
                    </div>
                </b-nav-item-dropdown>
            </ul>
            </nav>
        </header>



        <nav class="navbar navbar-expand-lg" id="menu-fixo" v-show="this.scrollPosition > 110">
            <ul id="logo" class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="../static/img/logo.png" id="logo" alt="bagagem.png"></a>
                    
                </li>
            </ul>
            <ul class="float-rigth navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" @click="scroll('header')">{{ $t('menuInicio') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @click="scroll('services')">{{ $t('menuServicos') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @click="scroll('session-clients')">{{ $t('menuClientes') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @click="scroll('contato')">{{ $t('menuContato') }}</a>
                </li>
                <b-nav-item-dropdown
                    id="change-language"
                    toggle-class="nav-link-custom"
                    text="language"
                    right
                >
                    <template slot="button-content">
                        <img :src="urlFlag" alt="flag">
                    </template>
                    <div>
                        <p id="select-lang-title">Country Website:</p>
                        <b-form-select v-model="$i18n.locale" :options="options" class="mb-4" id="select">
                        </b-form-select>
                    </div>
                </b-nav-item-dropdown>
            </ul>
        </nav>
        <nav class="navbar navbar-expand-lg" id="nav-menu">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-4 nav-menu-fixed" id="navbarTogglerDemo01">
                <ul id="logo" class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="../static/img/logo.png" id="logo" alt="bagagem.png"></a>
                        
                    </li>
                </ul>
                
                <ul id="menu" class="float-right navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" @click="scroll('header')">{{ $t('menuInicio') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" @click="scroll('services')">{{ $t('menuServicos') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" @click="scroll('session-clients')">{{ $t('menuClientes') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" @click="scroll('contato')">{{ $t('menuContato') }}</a>
                    </li>
                    <b-nav-item-dropdown
                        id="change-language"
                        toggle-class="nav-link-custom"
                        text="language"
                        right
                    >
                        <template slot="button-content">
                            <img :src="urlFlag" alt="flag">
                        </template>
                        <div>
                            <p id="select-lang-title">Country Website:</p>
                            <b-form-select v-model="$i18n.locale" :options="options" class="mb-4" id="select">
                            </b-form-select>
                        </div>
                    </b-nav-item-dropdown>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-7 col-sm-12" id="left-side">
                <img id="capa" src="../static/img/capa.png" alt="">
                <img class="background-left" src="../static/img/background-left.png" alt="background-left">
            </div>
            <div class="col-md-5 col-sm-12">
                <h1>{{ $t('tituloPt1') }}<br>{{ $t('tituloPt2') }}</h1>
                <h5>{{ $t('subtituloPt1') }}<br>{{ $t('subtituloPt2') }}</h5>

                <form class="form-inline form-header" method="post" name="contact-form-header">
                    <input class="form-header-input" type="email" v-model="email" :placeholder="$t('formHeaderPlaceholder')" aria-label="Email">
                    <button class="form-header-btn" type="submit" @click.prevent="enviar">{{ $t('formButtonText') }}</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <a :href="whatsappLink" class="btn btn-contact" target="_blank" role="button">
                    <img :src="urlButtonWtp" alt="botao">
                </a>
            </div>
        </div>    
    </div>
</template>

<script>
export default {
    data() {
      return {
        selectedLang: this.$i18n.locale,
        options: [
            { value: 'pt', text:'Brasil' },
            { value: 'en', text:'United States' },
            { value: 'es', text:'España' },
        ],
        urlFlag: require('@/static/img/brasil.png'),
        urlButtonWtp: require('@/static/img/fale-conosco.png'),
        email: '',
        scrollPosition: null,
        whatsappLink: 'https://api.whatsapp.com/send?phone=5562982079738&text=Quero%20embarcar%20nessa%20viagem!'
      }
    },

    methods: {
        selectLanguage(){
            if (this.selectedLang == 'en') {
                this.urlFlag = require('@/static/img/eua.png')
                this.urlButtonWtp = require('@/static/img/fale-conosco-en.png')
            } else if (this.selectedLang == 'es') {
                this.urlFlag = require('@/static/img/espanha.png')
                this.urlButtonWtp = require('@/static/img/fale-conosco-es.png')
            } else if (this.selectedLang == 'pt') {
                this.urlFlag = require('@/static/img/brasil.png')
                this.urlButtonWtp = require('@/static/img/fale-conosco.png')
            }
        },

        enviar() {
            this.$axios.$post('/mail/send', {
                from: this.email,
                subject: 'Contato - site bagagem',
                text: this.email,
            })
            
            alert('Contato registrado com sucesso! Entraremos em contato em breve!');
        },

        scroll(id) {  
            document.getElementById(id).scrollIntoView({
                behavior: "smooth"
            });
            const nav = document.getElementById('nav');
            nav.classList.remove('active');
        },

        updateScroll() {
            this.scrollPosition = window.scrollY;
            console.log(this.scrollPosition)
        },

        menuBurguer() {
            const btnMobile = document.getElementById('btn-mobile');

            function toggleMenu(event) {
                if (event.type === 'touchstart') event.preventDefault();
                const nav = document.getElementById('nav');
                nav.classList.toggle('active');
                const active = nav.classList.contains('active');
                event.currentTarget.setAttribute('aria-expanded', active);
                if (active) {
                    event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
                } else {
                    event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
                }
            }

            btnMobile.addEventListener('click', toggleMenu);
            btnMobile.addEventListener('touchstart', toggleMenu);
        }
    },

    updated(){
        this.selectedLang = this.$i18n.locale;
        this.selectLanguage();
    },

    mounted() {
        window.addEventListener('scroll', this.updateScroll);
        this.menuBurguer();
    },

    destroy() {
        window.removeEventListener('scroll', this.updateScroll)
    }

}
</script>