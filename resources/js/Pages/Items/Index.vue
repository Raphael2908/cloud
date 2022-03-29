<template>
<!-- component -->
<!-- This is an example component -->
<div class="flex flex-col justify-center items-center min-h-screen gap-5">
    <div v-if="$page.props.flash.message" class="alert">
        {{ $page.props.flash.message }}</div>
	<div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Id
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Name
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Price
                            </th>
                            <th scope="col" class="p-4">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        <tr v-for="item in items" :key="item">
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"> {{ item.id }} </td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"> {{ item.name }} </td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"> ${{ item.price }} </td>
                            <td 
                            class="py-4 px-6 text-sm font-medium text-purple-600 whitespace-nowrap dark:text-white"
                            @click="AddItem(item.id)"> 
                                Add 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <Button class="bg-emerald-500 hover:bg-emerald-700"
    @click="Submit">
        Checkout
    </Button>
</div>
</template>

<script>
import Button from "@/Jetstream/Button.vue"
export default {
    components:{
        Button
    },
    data(){
        return{
            form: this.$inertia.form({
                itemObject: {}
            })
        }
    },
    props:{
        items:{
            Type: Object,
            default: () => {}
        }
    },
    methods:{
        Submit(){
            this.$inertia.post(route('order.store'), this.form.itemObject)
        },
        AddItem(itemId){
            if(itemId in this.form.itemObject){
                this.form.itemObject[itemId]++
            }else{
                this.form.itemObject[itemId] = 1
            }
            console.log(this.form.itemObject)
        }
    }
}
</script>