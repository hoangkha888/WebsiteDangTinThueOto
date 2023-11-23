import { defineStore } from 'pinia'

export const useMenu = defineStore('menuId', {
  state: () => ({
    selectedKeys: [],
    openKeys: []
  }),
  actions:{
    onSelectedKey(data){
        this.selectedKeys = data;
    },
    onOpenKey(data){
        this.openKeys = data;
    }
  }
})