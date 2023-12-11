<template>
         <a-table :dataSource="dataSource" :columns="columns" />

</template>

<script>
import { useMenu } from '../../../stores/use-menu';

export default {
        setup(){
                useMenu().onSelectedKey(["admin-dangtin"]);
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
            thaotac:'Sửa | Xóa'
          },
          {
            key: '2',
            name: '2',
            age: 'Cho thuê xe Honda Giá rẻ',
            address: 'HonDa Cs5 2023',
            gia: '500.000đ',
            nthue: '2023-5-14',
            ntra: '2023-5-20',
            thaotac:'Sửa | Xóa'
          },
          {
            key: '3',
            name: '3',
            age: 'Cho thuê xe Honda Giá rẻ',
            address: 'HonDa Cs5 2023',
            gia: '500.000đ',
            nthue: '2023-5-14',
            thaotac:'Sửa | Xóa'
          },
          {
            key: '4',
            name: '4',
            age: 'Cho thuê xe Honda Giá rẻ',
            address: 'HonDa Cs5 2023',
            gia: '500.000đ',
            nthue: '2023-5-14',
            thaotac:'Sửa | Xóa'
          },
          {
            key: '5',
            name: '5',
            age: 'Cho thuê xe Honda Giá rẻ',
            address: 'HonDa Cs5 2023',
            gia: '500.000đ',
            nthue: '2023-5-14',
            thaotac:'Sửa | Xóa'
          },
          {
            key: '6',
            name: '6',
            age: 'Cho thuê xe Honda Giá rẻ',
            address: 'HonDa Cs5 2023',
            gia: '500.000đ',
            nthue: '2023-5-14',
            thaotac:'Sửa | Xóa'
          },
          {
            key: '7',
            name: '7',
            age: 'Cho thuê xe Honda Giá rẻ',
            address: 'HonDa Cs5 2023',
            gia: '500.000đ',
            nthue: '2023-5-14',
            thaotac:'Sửa | Xóa'
          },{
            key: '8',
            name: '8',
            age: 'Cho thuê xe Honda Giá rẻ',
            address: 'HonDa Cs5 2023',
            gia: '500.000đ',
            nthue: '2023-5-14',
            thaotac:'Sửa | Xóa'
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
            title: 'Ngày Đăng',
            dataIndex: 'nthue',
            key: 'nthue',
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