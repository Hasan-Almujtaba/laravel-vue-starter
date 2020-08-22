<template>
	<div>
		<!-- Content List Sidebar -->
		<content-list-sidebar :items="tools"></content-list-sidebar>

		<div v-for="(tool, index) in tools" :key="index" class="my-10" :id="tool.slug">
			<h1 class="text-h5">{{ tool.title }}</h1>
			<p class="text-body-2" v-html="tool.content"></p>
		</div>
	</div>
</template>

<script>
import { mapState, mapActions } from "vuex";
import ContentListSidebar from "../../components/web/ContentListSidebar";

export default {
	components: {
		ContentListSidebar,
	},
	methods: {
		...mapActions("tool", ["getTools"]),
	},
	mounted() {
		this.getTools();
	},
	computed: {
		...mapState("tool", ["tools"]),
	},
};
</script>

<style>
</style>