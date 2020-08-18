import Vue from 'vue'
import VueRouter from 'vue-router'

// Import Page Web
import NotFoundPage from './pages/404/NotFoundPage'
import HomePage from './pages/web/HomePage'

// Import Page Admin
import AdminPage from './pages/admin/AdminPage'
import DashboardPage from './pages/admin/dashboard/DashboardPage'
import ToolIndexPage from './pages/admin/Tool/ToolIndexPage'
import ToolCreatePage from './pages/admin/Tool/ToolCreatePage'
import ToolEditPage from './pages/admin/Tool/ToolEditPage'
import StyleIndexPage from './pages/admin/style/StyleIndexPage'
import PluginIndexPage from './pages/admin/plugin/PluginIndexPage'
import ReferenceIndexPage from './pages/admin/reference/ReferenceIndexPage'


Vue.use(VueRouter)

const progressConfig = [
  { call: 'color', modifier: 'temp', argument: '#03A9F4' },
  { call: 'fail', modifier: 'temp', argument: '#6e0000' },
  { call: 'location', modifier: 'temp', argument: 'top' },
  { call: 'transition', modifier: 'temp', argument: { speed: '1.5s', opacity: '0.6s', termination: 500 } }
]

export default new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      component: HomePage,
      name: 'admin-documentation'
    },
    {
      path: '/admin',
      component: AdminPage,
      children: [
        {
          path: 'dashboard',
          name: 'admin-dashboard',
          component: DashboardPage,
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
          path: 'style-guides',
          name: 'style-guide',
          component: StyleIndexPage
        },
        {
          path: 'plugins',
          name: 'plugin',
          component: PluginIndexPage
        },
        {
          path: 'references',
          name: 'reference',
          component: ReferenceIndexPage
        }
      ]
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