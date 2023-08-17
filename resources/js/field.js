import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-get-groups', IndexField)
  app.component('detail-get-groups', DetailField)
  app.component('form-get-groups', FormField)
})
