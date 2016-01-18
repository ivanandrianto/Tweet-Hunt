import java.lang.annotation.Target;

/**
 * Created by Wilhelm on 4/11/2015.
 */
public class BoyMoore {
    private int[] borders;
    private String pattern;
    BoyMoore(){
    	/* konstruktor boy-moore */
        pattern = "";}

    BoyMoore(String x){
    	/* konstruktor boy-moore */
        pattern = x;
    }

    public int[] buildLast(){
    	/* mengisi array last karakter */
        int last[] = new int[128];
        for(int i = 0;i<128;i++)
            last[i] = -1;
        for(int i = 0; i< pattern.length();i++)
            last[pattern.charAt(i)] = i;
        return last;
    }


    public int SearchOn(String Target){
    	/* Melakukan pencarian secara BoyMoore */
    	/* Mengembalikan indeks ditemukannya pattern */
    	/* Mengembalikan -1 jika tidak ditemukan */
        int last[] = buildLast();
        int n = Target.length();
        int m = pattern.length();
        int i = m-1;

        if(i>n -1)
            //gagal mengembalikan -1
            return -1;
        else {
            int j = m - 1;
            do{
                //looking-glass
                if (Character.toLowerCase(pattern.charAt(j))==Character.toLowerCase(Target.charAt(i))){
                    if(j==0){
                        return i;//hasil ditemukan pada i
                    }
                    else{
                        i--;
                        j--;
                    }
                }
                //character jump
                else{
                    int lo;
                    if(Target.charAt(i)>=128){
                        lo = -1;
                    }
                    else {
                        lo = last[Target.charAt(i)];
                    }
                    i = i + m - Math.min(j, 1 + lo);
                    j = m - 1;
                }
            }while(i<= n-1);
        }
        return -1;
    }
}
