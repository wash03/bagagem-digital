import i18n from './config/i18n'

export default {
  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'Bagagem Digital',
    htmlAttrs: {
      lang: 'pt-br'
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
      { name: 'format-detection', content: 'telephone=no' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
    '~/static/css/base.css',
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
  ],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
    [
      'nuxt-i18n',
      {
        vueI18nLoader: true,
        defaultLocale: 'pt',
        seo: true,
         locales: [
          {
             code: 'en',
             name: 'English',
             iso: 'en-US'
          },
          {
             code: 'pt',
             name: 'Português',
             iso: 'pt-BR'
          },
          {
            code: 'es',
            name: 'Español',
            iso: 'es-ES'
          }
        ],
        vueI18n: i18n
      }
     ]
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    // https://go.nuxtjs.dev/bootstrap
    'bootstrap-vue/nuxt',
    '@nuxtjs/axios',
    ['nuxt-mail', {
      message: {
        to: 'wstsilva@outlook.com.br',
      },
      smtp: {
        host: 'server1.livrehost.net.br',
        port: 465,
        auth: {
          user: 'site@bagagem.digital',
          pass: 'Bagagem2021@'
        },
      },
    }],
  ],

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
  }
}
