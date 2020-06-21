var day_prices = [7,1,5,3,6,4];

var maxProfit = function(prices) {

    if (prices.length < 1 || prices.length > 3*Math.pow(10,4)) return 0;

    var profit = 0;
    
    for(let i=0;i<prices.length;i++){
        if (prices[i+1]) {
            if (prices[i+1] < prices[i]){
                profit += sold-buy;
            }
        }
    }
    return profit;
};

var margin = maxProfit(day_prices);

console.log(margin);