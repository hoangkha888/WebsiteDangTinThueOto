<template>
        <a-table :dataSource="dataSource" :columns="columns" />

</template>

<script>
import { useMenu } from '../../../stores/use-menu';



export default {
        setup(){
                useMenu().onSelectedKey(["admin-pheduyet"]);
                return {
        dataSource: [
          {
            key: '1',
            name: '1',
            age: 'Cho thuê xe Honda Giá rẻ',
            address: 'HonDa Cs5 2023',
            gia: '500.000đ',
            nthue: '2023-5-14',
            ntra: '2023-5-20',
            thaotac:'Phê Duyệt | Xóa'
          },
          {
            key: '2',
            name: '2',
            age: 'Cho thuê xe Honda Giá rẻ',
            address: 'HonDa Cs5 2023',
            gia: '500.000đ',
            nthue: '2023-5-14',
            ntra: '2023-5-20',
            thaotac:'Phê Duyệt | Xóa'
          },
          {
            key: '3',
            name: '3',
            age: 'Cho thuê xe Honda Giá rẻ',
            address: 'HonDa Cs5 2023',
            gia: '500.000đ',
            nthue: '2023-5-14',
            ntra: '2023-5-20',
            thaotac:'Phê Duyệt | Xóa'
          },
          
        ],

        columns: [
          {
            title: 'Mã tin Đăng',
            dataIndex: 'name',
            key: 'name',
          },
          {
            title: 'Tiêu đề',
            dataIndex: 'age',
            key: 'age',
          },
          {
            title: 'Tên Xe',
            dataIndex: 'address',
            key: 'address',
          },
          {
            title: 'Giá Thuê',
            dataIndex: 'gia',
            key: 'gia',
          },
          {
            title: 'Ngày thuê',
            dataIndex: 'nthue',
            key: 'nthue',
          },
          {
            title: 'Ngày Trả',
            dataIndex: 'ntra',
            key: 'ntra',
          },
          {
            title: 'Thao tác',
            dataIndex: 'thaotac',
            key: 'thaotac',
          },
        ],
      };
        },
        
}
</script>