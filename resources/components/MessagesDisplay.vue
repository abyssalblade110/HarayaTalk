<template>
  <div>
    <div v-for="message in messages" :key="message.id">
      <p><strong>{{ message.user.name }}:</strong> {{ message.message }}</p>
    </div>
  </div>
</template>

<script>
export default {
  props: ['messages']
};
</script>
