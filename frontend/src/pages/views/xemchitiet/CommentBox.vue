<template>
    <div>
      <ul>
        <li v-for="number in numbers" :key="number.id" :data-name="number.name">
          {{ number.name }}
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        numbers: [
          {
            id: 1,
            name: "John Doe",
          },
          {
            id: 2,
            name: "Jane Doe",
          },
        ],
      };
    },
  };
  </script>
  