<template>
  <!-- <div class="container">
      <div class="row">
        <div class="col-md-4 box" v-for="(product, index) in displayedProducts" :key="index">
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
    </div> -->


    <div class="search" style="width: 100%;justify-content: center;text-align: center;margin-top: 15px;">
      <form action="/action_page.php">
      <input style="width: 35%;height: 40px; border-radius: 5px; " type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    </div>


  <div class="m-container">
    <div class="col4-mg20" v-for="(product, index) in displayedProducts" :key="index">
      <a class="item item-car" href="/car/mitsubishi-xpander-2023/KL2NPE">
        <div class="item-box">
          <div class="img-car">
            <div class="fix-img">
              <img loading="lazy"
                src="https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2023/p/g/2023/08/27/14/zWhwhOLlDgiwdrQ3gLDQyw.jpg"
                alt="Cho thuê xe tự lái  MITSUBISHI XPANDER 2023">
            </div>
          </div>
          <div class="desc-car">
            <div class="desc-tag"><span class="tag-item transmission">{{ product.name }}</span></div>
            <div class="desc-name">
              <p>{{ product.description }}</p>
            </div>
            <div class="desc-address-price">
              <div class="address">
                <p>Quận Bình Thạnh, Hồ Chí Minh</p>
              </div>
            </div>
          </div>
        </div>
      </a>

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
        { name: 'Xe thuê 1', description: 'Mô tả của xe 1.', image: 'https://via.placeholder.com/150' },
        { name: 'Xe thuê 2', description: 'Mô tả của xe 2.', image: 'https://via.placeholder.com/150' },
        { name: 'Xe thuê 3', description: 'Mô tả của xe 3.', image: 'https://via.placeholder.com/150' },
        { name: 'Xe thuê 1', description: 'Mô tả của xe 4.', image: 'https://via.placeholder.com/150' },
        { name: 'Xe thuê 2', description: 'Mô tả của xe 5.', image: 'https://via.placeholder.com/150' },
        { name: 'Xe thuê 3', description: 'Mô tả của xe 6.', image: 'https://via.placeholder.com/150' }
      ],
      currentPage: 1,
      itemsPerPage: 6
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

<style>
.m-container {
  max-width: 1280px;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  grid-gap: 20px;
  gap: 20px;
}




.item-car {
  display: flex;
  padding: 16px;
  border-radius: 12px;
  background-color: #fff;
  border: 1px solid #e0e0e0;
  margin-top: 20px;
}

.item-car .item-box {
  display: flex;
  flex-direction: column;
  width: 100%;
  grid-gap: 32px;
  gap: 32px;
  border-radius: 12px;
}

.item-car .item-box .img-car {
  position: relative;
}

.item-car .item-box .img-car .fix-img {
  padding-bottom: 75%;
  border-radius: 10px;
}

.item-car .item-box .img-car .fix-img {
  padding-bottom: 75%;
  border-radius: 10px;
}

.fix-img img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.item-car .item-box .desc-car {
  display: flex;
  flex-direction: column;
  height: 100%;
}

.item-car .item-box .desc-car .desc-tag {
  display: flex;
  flex-wrap: wrap;
}

.item-car .item-box .desc-car .desc-name {
  display: flex;
  align-items: center;
  grid-gap: 4px;
  gap: 4px;
  margin-bottom: 4px;
}

.item-car .item-box .desc-car .desc-address-price {
  display: flex;
  justify-content: space-between;
  align-items: center;
  grid-gap: 8px;
  gap: 8px;
  color: #767676;
  font-size: .75rem;
  font-weight: 500;
  line-height: 16px;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.cardsr {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
}
</style>