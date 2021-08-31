<template>
    <img :src="myLogo" />
</template>

<script>
export default {
    name: "login",
    data() {
        return {
            myLogo: require("../assets/logo.svg"),
        };
    },
};
</script>
