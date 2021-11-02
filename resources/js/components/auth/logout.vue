<template>

</template>

<script>
	export default{
        created(){
            Users.logout();
            Toast.fire({
                      icon: 'success',
                      title: 'Successfully Log Out'
                    })
        this.$router.push({ name:'login' })
        }
    }
</script>

<style >

</style>