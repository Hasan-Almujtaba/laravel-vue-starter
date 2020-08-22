<template>
	<!-- App wrapper -->
	<v-app>
		<!-- Navigation -->
		<web-navigation></web-navigation>

		<!-- Content Wrapper -->
		<v-main>
			<!-- Provides the application the proper gutter -->
			<v-container fluid>
				<!-- Content -->
				<h1 class="text-h4 font-weight-thin">Gaya Penulisan Kode</h1>
				<p
					class="text-body-1"
				>Halaman ini berisi petunjuk penulisan kode yang dianjurkan dan merupakan praktik terbaik untuk bekerja dalam tim dengan tujuan mempermudah anggota tim membaca kode dari anggota tim yang lain</p>
				<style-page-content></style-page-content>
			</v-container>
		</v-main>

		<v-footer app>
			<v-icon>mdi-copyright</v-icon>
			{{ new Date().getFullYear() }} V-CONNEXT
		</v-footer>
	</v-app>
</template>

<script>
import WebNavigation from "../../components/web/WebNavigation";
import StylePageContent from "../../components/web/StylePageContent";

export default {
	components: {
		WebNavigation,
		StylePageContent,
	},
};
</script>