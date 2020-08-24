<template>
	<div>
		<!-- Content List Sidebar -->
		<content-list-sidebar :items="styles"></content-list-sidebar>

		<div v-if="styles.length">
			<div v-for="(style, index) in styles" :key="index" class="my-10" :id="style.slug">
				<h1 class="text-h5">{{ style.title }}</h1>
				<p class="text-body-2" v-html="style.content"></p>
			</div>
		</div>

		<div v-else>
			<v-alert type="info">Tidak ada data yang bisa ditampilkan</v-alert>
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
		...mapActions("style", ["getStyles"]),
	},
	mounted() {
		this.getStyles();
	},
	computed: {
		...mapState("style", ["styles"]),
	},
};
</script>

<style>
</style>