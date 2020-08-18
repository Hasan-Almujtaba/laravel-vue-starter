<template>
	<div>
		<v-data-table :headers="headers" :items="tools" mobile-breakpoint>
			<template v-slot:item="row">
				<tr>
					<td>{{ row.index + 1 }}</td>
					<td>{{ row.item.title }}</td>
					<td>
						<v-btn
							fab
							x-small
							color="primary"
							:to="{name: 'admin-tool-edit', params: { id: row.item.id }}"
							class="m-2"
						>
							<v-icon>mdi-pencil</v-icon>
						</v-btn>
						<v-btn fab x-small color="error" class="m-2" @click="confirm(row.item)">
							<v-icon>mdi-delete</v-icon>
						</v-btn>
					</td>
				</tr>
			</template>
		</v-data-table>
	</div>
</template>

<script>
import { mapState, mapActions } from "vuex";

export default {
	data: () => ({
		items: [
			{ title: "hello" },
			{ title: "world" },
			{ title: "za" },
			{ title: "warudo" },
		],
		headers: [
			{ text: "#", width: 10 },
			{ text: "Title", value: "title" },
			{ text: "Action", width: 100 },
		],
	}),
	computed: {
		...mapState("tool", ["tools"]),
	},
	methods: {
		...mapActions("tool", ["getTools", "deleteTool"]),
		confirm(data) {
			this.$swal({
				title: "Are you sure?",
				text: "You won't be able to revert this!",
				icon: "warning",
				showCancelButton: true,
				confirmButtonColor: "#3085d6",
				cancelButtonColor: "#d33",
				confirmButtonText: "Yes, delete it!",
			}).then((result) => {
				if (result.value) {
					this.deleteTool(data.id);
					this.$swal("Deleted!", "Item Deleted", "success");
				}
			});
		},
	},
	mounted() {
		this.getTools();
	},
};
</script>

<style>
</style>