<template>
	<div>
		<v-navigation-drawer v-model="drawer" clipped app right>
			<v-list flat>
				<v-subheader>Daftar Konten</v-subheader>
				<v-list-item-group color="primary">
					<v-list-item dense v-for="(item, i) in items" :key="i">
						<v-list-item-content>
							<v-list-item-title
								v-text="item.title"
								@click="setLink(item.slug), $vuetify.goTo(target, options)"
							></v-list-item-title>
						</v-list-item-content>
					</v-list-item>
				</v-list-item-group>
			</v-list>
		</v-navigation-drawer>
	</div>
</template>

<script>
export default {
	props: {
		items: null,
	},
	computed: {
		target(target) {
			const value = "#" + this.element;
			if (!isNaN(value)) return Number(value);
			else return value;
		},
		options() {
			return {
				duration: 400,
				offset: 0,
				easing: "easeInOutCubic",
			};
		},
	},
	methods: {
		setLink(link) {
			this.element = link;
		},
	},
	data: () => ({
		drawer: null,
		element: "hello",
	}),
};
</script>

<style>
</style>