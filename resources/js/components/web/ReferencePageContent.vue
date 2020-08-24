<template>
	<div>
		<!-- Content List Sidebar -->
		<content-list-sidebar :items="references"></content-list-sidebar>

		<div v-if="references.length">
			<div v-for="(reference, index) in references" :key="index" class="my-10" :id="style.slug">
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
		...mapActions("reference", ["getReferences"]),
	},
	mounted() {
		this.getReferences();
	},
	computed: {
		...mapState("reference", ["references"]),
	},
};
</script>

<style>
</style>