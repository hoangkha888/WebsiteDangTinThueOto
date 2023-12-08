<template>
    <div class="container">
      <div class="row">
        <div class="col-md-4" v-for="(product, index) in displayedProducts" :key="index">
          <div class="card">
            <img :src="product.image" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ product.name }}</h5>
              <p class="card-text">{{ product.description }}</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </template>
  
  <script>
  import Paginate from 'vuejs-paginate'
  
  export default {
    components: {
      Paginate
    },
    data() {
      return {
        products: [
          { name: 'Product 1', description: 'Description of Product 1.', image: 'https://via.placeholder.com/150' },
          { name: 'Product 2', description: 'Description of Product 2.', image: 'https://via.placeholder.com/150' },
          { name: 'Product 3', description: 'Description of Product 3.', image: 'https://via.placeholder.com/150' },
          { name: 'Product 1', description: 'Description of Product 1.', image: 'https://via.placeholder.com/150' },
          { name: 'Product 2', description: 'Description of Product 2.', image: 'https://via.placeholder.com/150' },
          { name: 'Product 3', description: 'Description of Product 3.', image: 'https://via.placeholder.com/150' }
        ],
        currentPage: 1,
        itemsPerPage: 3
      }
    },
    computed: {
      pageCount() {
        return Math.ceil(this.products.length / this.itemsPerPage)
      },
      displayedProducts() {
        const start = (this.currentPage - 1) * this.itemsPerPage
        const end = start + this.itemsPerPage
        return this.products.slice(start, end)
      }
    },
    methods: {
      changePage(page) {
        this.currentPage = page
      }
    }
  }
  </script>
  