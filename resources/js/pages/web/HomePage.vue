<template>
	<!-- App wrapper -->
	<v-app>
		<!-- Navigation -->
		<v-app-bar color="primary" dark app>
			<v-toolbar-title>Panduan Pengembangan</v-toolbar-title>
		</v-app-bar>

		<!-- Content Wrapper -->
		<v-main>
			<!-- Provides the application the proper gutter -->
			<v-container fluid>
				<!-- Content -->
				<v-row>
					<v-col lg="6" class="lg:tw-pt-40 lg:tw-px-20">
						<h1 class="tw-text-4xl tw-leading-tight">Panduan Pengembangan</h1>
						<p>Panduan ini akan membantumu dalam mengembangkan aplikasi dengan praktik yang direkomendasikan dalam bekerja tim.</p>
						<!-- Show Button on lg -->
						<desktop-home-button></desktop-home-button>
						<!-- show button on sm -->
						<mobile-home-button></mobile-home-button>
					</v-col>
					<v-col lg="6">
						<v-img src="/images/home.svg"></v-img>
					</v-col>
				</v-row>
			</v-container>
		</v-main>

		<v-footer app>
			<v-icon>mdi-copyright</v-icon>
			{{ new Date().getFullYear() }} V-CONNEXT
		</v-footer>
	</v-app>
</template>

<script>
import MobileHomeButton from "../../components/web/MobileHomeButton";
import DesktopHomeButton from "../../components/web/DesktopHomeButton";

export default {
	components: {
		MobileHomeButton,
		DesktopHomeButton,
	},
	data: () => ({}),
};
</script>

<style>
</style>