import{a}from"./actions-DcGaa8HS.js";import{a as t,c as i,r as e}from"./util-1s-pcq2u.js";window.addEventListener("alpine:init",()=>{Alpine.data("splitForm",()=>({isProcessing:!1,percentage:0,address:"",transactionHash:"",isReady(){return!!(this.isVerified&&!this.isProcessing&&this.percentage&&this.address)},paymentAmount(){return(this.remainingBalance*this.percentage/100).toFixed()},async handleSend(){this.transactionHash="",t({id:"payment",type:"info",text:i.paying}),this.isProcessing=!0;const s=await a(this.paymentAmount(),this.address);e("payment"),s.success?(this.transactionHash=s.data.hash,t({type:"info",text:s.data.message})):t({type:"warning",text:s.data}),this.isProcessing=!1}}))});
