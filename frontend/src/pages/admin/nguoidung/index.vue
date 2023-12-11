<template>
        <a-table :dataSource="dataSource" :columns="columns" />

</template>

<script>
import { useMenu } from '../../../stores/use-menu';

export default {
        setup(){
                useMenu().onSelectedKey(["admin-nguoidung"]);

                return {
        dataSource: [
          {
            key: '1',
            name: 'Hoàng Văn Khá',
            age: 'kha123',
            address: 'admin',
          },
          {
            key: '2',
            name: 'Phạm Xuân Toán',
            age: 'toan123',
            address: 'Khách',
          },
          {
            key: '3',
            name: 'Ngô Đặng Long',
            age: 'long223',
            address: 'Chủ xe',
          },
          {
            key: '4',
            name: 'Ngô Đặng Long',
            age: 'long223',
            address: 'Chủ xe',
          },
          {
            key: '8',
            name: 'Ngô Đặng Long',
            age: 'long223',
            address: 'Chủ xe',
          },
          {
            key: '5',
            name: 'Ngô Đặng Long',
            age: 'long223',
            address: 'Chủ xe',
          },

          {
            key: '6',
            name: 'Ngô Đặng Long',
            age: 'long223',
            address: 'Chủ xe',
          },
          {
            key: '7',
            name: 'Ngô Đặng Long',
            age: 'long223',
            address: 'Chủ xe',
          },
        ],

        columns: [
          {
            title: 'Họ tên',
            dataIndex: 'name',
            key: 'name',
          },
          {
            title: 'Tên đăng nhập',
            dataIndex: 'age',
            key: 'age',
          },
          {
            title: 'Số điện thoại',
            dataIndex: 'address',
            key: 'address',
          },
          {
            title: 'quyền truy cập',
            dataIndex: 'address',
            key: 'address',
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