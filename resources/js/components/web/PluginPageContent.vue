<template>
	<div>
		<!-- Content List Sidebar -->
		<content-list-sidebar :items="plugins"></content-list-sidebar>

		<div v-for="(style, index) in plugins" :key="index" class="my-10" :id="style.slug">
			<h1 class="text-h5">{{ style.title }}</h1>
			<p class="text-body-2" v-html="style.content"></p>
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
		...mapActions("plugin", ["getPlugins"]),
	},
	mounted() {
		this.getPlugins();
	},
	computed: {
		...mapState("plugin", ["plugins"]),
	},
};
</script>

<style>
</style>