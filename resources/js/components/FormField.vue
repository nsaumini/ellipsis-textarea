<template>
    <Textarea :field="field" />
</template>

<script>
import Textarea from '../../../../../nova/resources/js/components/Form/TextareaField.vue'

export default {
	props: ['resourceName', 'resourceId', 'field'],
	
    components: { Textarea },
}
</script>
