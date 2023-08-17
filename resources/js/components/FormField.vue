<template>
  <DefaultField
    :field="field"
    :errors="errors"
    :show-help-text="showHelpText"
    :full-width-content="fullWidthContent"
  >
    <template #field>
      <a size="lg" align="center"
       :href="field.link"
       component="button" 
       dusk="update-button" 
      class="shadow relative bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900 cursor-pointer rounded text-sm font-bold focus:outline-none focus:ring ring-primary-200 dark:ring-gray-600 inline-flex items-center justify-center h-9 px-3 shadow relative bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900">
        <span class="">Подгрузить группы</span><!----></a>
    </template>
  </DefaultField>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
  mixins: [FormField, HandlesValidationErrors],
  props: ['resourceName', 'resourceId', 'field'],

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    // setInitialValue() {
    //   this.value = this.field.value || ''
    // },

    /**
     * Fill the given FormData object with the field's internal value.
     */
     fill(formData) {
      this.fillIfVisible(formData, this.field.attribute, this.value || '')
     }
  },
}
</script>
