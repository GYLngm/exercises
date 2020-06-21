package maxProfit;

class solution {
    
    public static int maxProfit(int[] prices) {

        int profit = 0;

        if (prices.length < 1 || prices.length > 3 * Math.pow(10,4)) return 0;
        
        for(int i=0;i<prices.length-1;i++){
            if(prices[i] >= 0 && prices[i] < Math.pow(10,4))
            {
                if(prices[i+1] > prices[i]){
                    profit += prices[i+1]-prices[i];
                }
            }
        }

        return profit;
    }
    
    public static void main(String[] args){

        int[] arr = {7,1,5,3,6,4};
        
        int mxProfit = maxProfit(arr);
        
        System.out.println(mxProfit);

    }
}