<template>
    <span class="truncate">{{ truncatedValue }}</span>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
    computed: {
		truncatedValue: function () {
			return this.field.value.length > this.field.displayLength ? this.field.value.substr(0, this.field.displayLength) + '...' 
				: this.field.value;
		}
	}
}
</script>
