<template>
    <main class="flex">
        <div class="flex flex-col justify-between w-1/4 h-screen">
            <SideMenu />
        </div>
        <div class="flex flex-col justify-start w-3/4 mr-4 my-8 p-2">
            <div
                class="max-w-full h-full rounded-lg bg-madrid p-6 overflow-auto"
            >
                <h1 class="font-bold mb-2">DATA PENGGUNA SISTEM</h1>
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="
                                    px-6
                                    py-3
                                    border-b-2 border-admin
                                    text-left
                                    leading-4
                                    text-navbar text-xs
                                    tracking-wider
                                "
                            >
                                Nama Pengguna
                            </th>
                            <th
                                class="
                                    px-6
                                    py-3
                                    border-b-2 border-admin
                                    text-left text-xs
                                    leading-4
                                    text-navbar
                                    tracking-wider
                                "
                            >
                                Jabatan
                            </th>
                            <th
                                class="
                                    px-6
                                    py-3
                                    border-b-2 border-admin
                                    text-left text-xs
                                    leading-4
                                    text-navbar
                                    tracking-wider
                                "
                            >
                                Email
                            </th>
                            <th
                                class="
                                    px-6
                                    py-3
                                    border-b-2 border-admin
                                    text-left text-xs
                                    leading-4
                                    text-navbar
                                    tracking-wider
                                "
                            >
                                Role
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-madrid">
                        <tr>
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b border-admin
                                "
                            >
                                <div class="text-sm leading-5 text-blue-900">
                                    Ahmad Farhan Setiawan
                                </div>
                            </td>
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b
                                    text-blue-900
                                    border-admin
                                    text-sm
                                    leading-5
                                "
                            >
                                Admin
                            </td>
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b
                                    text-blue-900
                                    border-admin
                                    text-sm
                                    leading-5
                                "
                            >
                                ahmad@gmail.com
                            </td>
                            <td
                                class="
                                    px-6
                                    py-2
                                    whitespace-no-wrap
                                    border-b
                                    text-blue-900
                                    border-admin
                                    text-sm
                                    leading-5
                                "
                            >
                                Admin
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</template>

<script>
import SideMenu from "../../components/SideMenu.vue";
export default {
    components: {
        SideMenu,
    },
};
</script>
