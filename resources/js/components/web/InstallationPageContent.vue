<template>
	<div>
		<!-- Page Summary -->
		<h1 class="text-h4">Instalasi Laravel Vue Starter</h1>
		<p
			class="text-body-1"
		>Aplikasi ini bisa diinstal sebagai starter project Laravel dan Vue dengan langkah-langkah yang tercantum dalam halaman ini</p>
		<!-- Download Project -->
		<h2 class="text-h5 mt-10">1. Clone / Download project dari github</h2>
		<p
			class="text-body-2"
		>Tahap pertama adalah dengan melakukan clone project ke dalam text editor yang digunakan, selain itu project bisa diunduh dengan format ZIP</p>
		<v-btn
			rounded
			color="blue lighten-5"
			href="https://github.com/Hasan-Almujtaba/laravel-vue-starter"
			target="_blank"
		>
			<v-icon>mdi-github</v-icon>Github
		</v-btn>
		<!-- Install Composer Packages -->
		<div>
			<h2 class="text-h5 mt-10">2. Install Composer Packages</h2>
			<p class="text-body-2">
				Buka terminal pada text editor dan ketik perintah berikut
				<code>composer install</code> kemudian tunggu beberapa saat hingga proses selesai dan lanjutkan ke tahap berikut
			</p>
		</div>
		<!-- Install node_modules  -->
		<div>
			<h2 class="text-h5 mt-10">3. Install Dependencies Packages</h2>
			<p class="text-body-2">
				Buka terminal pada text editor dan ketik perintah berikut
				<code>npm install</code> untuk mendapatkan semua dependencies di dalam folder node_modules kemudian tunggu beberapa saat hingga proses selesai dan lanjutkan ke tahap berikut
			</p>
		</div>
		<!-- Generate Key  -->
		<div>
			<h2 class="text-h5 mt-10">4. Generate Key Laravel</h2>
			<p class="text-body-2">
				Ganti nama file
				<code>.env.example</code> menjadi
				<code>.env</code> kemudian jalankan perintah
				<code>php artisan key:generate</code> pada terminal untuk generate key
			</p>
		</div>
		<!-- Compile asset  -->
		<div>
			<h2 class="text-h5 mt-10">5. Compile Asset</h2>
			<p class="text-body-2">
				Jalankan perintah
				<code>npm run dev</code> untuk melakukan compile asset ke folder public
			</p>
		</div>
		<!-- Compile asset  -->
		<div>
			<h2 class="text-h5 mt-10">5. Buat Database (Opsional)</h2>
			<p class="text-body-2">
				Buat database dengan nama project yang akan dibuat kemudian jalankan perintah
				<code>php artisan migrate</code> pada terminal untuk membuat table sesuai dengan file migration bawaan yang terdapat dalam starter project ini
			</p>
		</div>
	</div>
</template>

<script>
import { mapState, mapActions } from "vuex";

export default {
	components: {},
};
</script>

<style>
</style>