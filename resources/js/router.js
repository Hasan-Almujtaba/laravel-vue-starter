import Vue from 'vue'
import VueRouter from 'vue-router'
import goTo from 'vuetify/es5/services/goto'

// Import Web page
import NotFoundPage from './pages/404/NotFoundPage'
import HomePage from './pages/web/HomePage'
import InstallationPage from './pages/web/InstallationPage'
import ToolPage from './pages/web/ToolPage'
import StylePage from './pages/web/StylePage'
import PluginPage from './pages/web/PluginPage'
import ReferencePage from './pages/web/ReferencePage'

// import authentication page
import LoginPage from './pages/auth/LoginPage'


// Import Admin page
import AdminPage from './pages/admin/AdminPage'
import DashboardPage from './pages/admin/dashboard/DashboardPage'
import ToolIndexPage from './pages/admin/Tool/ToolIndexPage'
import ToolCreatePage from './pages/admin/Tool/ToolCreatePage'
import ToolEditPage from './pages/admin/Tool/ToolEditPage'
import StyleIndexPage from './pages/admin/style/StyleIndexPage'
import StyleCreatePage from './pages/admin/style/StyleCreatePage'
import StyleEditPage from './pages/admin/style/StyleEditPage'
import PluginIndexPage from './pages/admin/plugin/PluginIndexPage'
import PluginCreatePage from './pages/admin/plugin/PluginCreatePage'
import PluginEditPage from './pages/admin/plugin/PluginEditPage'
import ReferenceIndexPage from './pages/admin/reference/ReferenceIndexPage'
import ReferenceCreatePage from './pages/admin/reference/ReferenceCreatePage'
import ReferenceEditPage from './pages/admin/reference/ReferenceEditPage'


Vue.use(VueRouter)

// progerss bar config
const progressConfig = [
  { call: 'color', modifier: 'temp', argument: '#03A9F4' },
  { call: 'fail', modifier: 'temp', argument: '#6e0000' },
  { call: 'location', modifier: 'temp', argument: 'top' },
  { call: 'transition', modifier: 'temp', argument: { speed: '1.5s', opacity: '0.6s', termination: 500 } }
]

// route guard function
function isLoggedIn(to, from, next) {
  var isAuthenticated = false

  if (localStorage.getItem('auth')) {
    isAuthenticated = true
  }

  if (isAuthenticated) {
    next()
  } else {
    next('/login')
  }
}

export default new VueRouter({
  mode: 'history',
  scrollBehavior: (to, from, savedPosition) => {
    if (savedPosition) {
      return savedPosition
    } else {
      return { x: 0, y: 0 }
    }
  },
  routes: [
    {
      path: '/',
      component: HomePage,
      name: 'homepage',
      meta: {
        progress: {
          func: progressConfig
        }
      }
    },
    {
      path: '/login',
      component: LoginPage,
      name: 'login',
      meta: {
        progress: {
          func: progressConfig
        }
      }
    },
    {
      path: '/admin',
      component: AdminPage,
      beforeEnter: isLoggedIn,
      children: [
        {
          path: 'dashboard',
          name: 'admin-dashboard',
          component: DashboardPage,
          meta: {
            progress: {
              func: progressConfig
            }
          }
        },
        {
          path: 'tools',
          name: 'admin-tool',
          component: ToolIndexPage,
          meta: {
            progress: {
              func: progressConfig
            }
          }
        },
        {
          path: 'tools/create',
          name: 'admin-tool-create',
          component: ToolCreatePage,
          meta: {
            progress: {
              func: progressConfig
            }
          }
        },
        {
          path: 'tools/edit/:id',
          props: true,
          name: 'admin-tool-edit',
          component: ToolEditPage,
          meta: {
            progress: {
              func: progressConfig
            }
          }
        },
        {
          path: 'styles',
          name: 'admin-style',
          component: StyleIndexPage,
          meta: {
            progress: {
              func: progressConfig
            }
          }
        },
        {
          path: 'styles/create',
          name: 'admin-style-create',
          component: StyleCreatePage,
          meta: {
            progress: {
              func: progressConfig
            }
          }
        },
        {
          path: 'styles/edit/:id',
          props: true,
          name: 'admin-style-edit',
          component: StyleEditPage,
          meta: {
            progress: {
              func: progressConfig
            }
          }
        },
        {
          path: 'plugins',
          name: 'admin-plugin',
          component: PluginIndexPage,
          meta: {
            progress: {
              func: progressConfig
            }
          }
        },
        {
          path: 'plugins/create',
          name: 'admin-plugin-create',
          component: PluginCreatePage,
          meta: {
            progress: {
              func: progressConfig
            }
          }
        },
        {
          path: 'plugins/edit/:id',
          props: true,
          name: 'admin-plugin-edit',
          component: PluginEditPage,
          meta: {
            progress: {
              func: progressConfig
            }
          }
        },
        {
          path: 'references',
          name: 'admin-reference',
          component: ReferenceIndexPage,
          meta: {
            progress: {
              func: progressConfig
            }
          }
        },
        {
          path: 'references/create',
          name: 'admin-reference-create',
          component: ReferenceCreatePage,
          meta: {
            progress: {
              func: progressConfig
            }
          }
        },
        {
          path: 'references/edit/:id',
          name: 'admin-reference-edit',
          props: true,
          component: ReferenceEditPage,
          meta: {
            progress: {
              func: progressConfig
            }
          }
        },
      ]
    },
    {
      path: '/instalasi',
      component: InstallationPage,
      name: 'installation',
      meta: {
        progress: {
          func: progressConfig
        }
      }
    },
    {
      path: '/alat-pengembangan',
      component: ToolPage,
      name: 'resource',
      meta: {
        progress: {
          func: progressConfig
        }
      }
    },
    {
      path: '/gaya-penulisan-kode',
      component: StylePage,
      name: 'style',
      meta: {
        progress: {
          func: progressConfig
        }
      }
    },
    {
      path: '/plugin-dan-library',
      component: PluginPage,
      name: 'plugin',
      meta: {
        progress: {
          func: progressConfig
        }
      }
    },
    {
      path: '/referensi',
      component: ReferencePage,
      name: 'reference',
      meta: {
        progress: {
          func: progressConfig
        }
      }
    },
    {
      path: '/404',
      component: NotFoundPage
    },
    {
      path: '*',
      redirect: '/404'
    },
  ]
})