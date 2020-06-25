
import java.util.*;

class Solution {
    
    public static boolean isValid(char[][] box, int xS, int xE, int yS, int yE) {
        
        Set<Integer> tempSet = new HashSet<Integer>();
        for (int i=xS; i<=xE; i++) {
            for (int j=yS; j<=yE; j++) {
                if(box[i][j] != '.' && !tempSet.add(box[i][j]-'0')) return false;
            }
        }
        
        return true;
    } 
    
    public static boolean isValidSudoku(char[][] board) {
        
        for(int i=0;i<9;i++){
            
            if(!isValid(board, i, i, 0, 8) ||
               !isValid(board, 0, 8, i, i) ||
               !isValid(board, (i/3)*3, ((i/3)*3)+2, (i%3)*3, (i%3)*3+2)
              ) return false;
        }
        
        return true;
    }

    public static void main(String[] args) {
        char[][] board= new char[][]{
            {'5','3','.','.','7','.','.','.','.'},
            {'6','.','.','1','9','5','.','.','.'},
            {'.','9','8','.','.','.','.','6','.'},
            {'8','.','.','.','6','.','.','.','3'},
            {'4','.','.','8','.','3','.','.','1'},
            {'7','.','.','.','2','.','.','.','6'},
            {'.','6','.','.','.','.','2','8','.'},
            {'.','.','.','4','1','9','.','.','5'},
            {'.','.','.','.','8','.','.','7','9'}
        };

        System.out.println(isValidSudoku(board));
    }
}