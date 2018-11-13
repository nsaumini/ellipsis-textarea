<template>
    <Textarea :field="field" />
</template>

<script>
import Textarea from '../../../../../nova/resources/js/components/Detail/TextareaField.vue'

export default {
	props: ['resource', 'resourceName', 'resourceId', 'field'],
	
    components: { Textarea },
}
</script>
