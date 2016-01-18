/**
 * Created by Wilhelm on 4/11/2015.
 */
public class KMP {
    private int[] borders;
    private String pattern;
    KMP(){
    	/* konstruktor KMP */
        borders = new int[0];}

    KMP(String x){
    	/* konstruktor KMP */
        pattern = x;
        borders = new int[pattern.length()];
        int i=0, j=-1;
        borders[i]=j;
        while (i<borders.length)
        {
            while (j>=0 && !(pattern.charAt(i)== pattern.charAt(j))) j=borders[j];
            i++; j++;
            if(i!=borders.length)
                borders[i]=j;
        }
    }

    public void PrintBordersArray(){
    	/* mencetak borders array */
        for (int i = 0; i<borders.length; i++){
            System.out.println(pattern.charAt(i)+" "+borders[i]);
        }
    }

    public int SearchOn(String Target){
    	/* Melakukan pencarian secara KMP */
    	/* Mengembalikan indeks ditemukannya pattern */
    	/* Mengembalikan -1 jika tidak ditemukan */
        int i = 0,m = 0;
        while ((m + i) < Target.length()) {
            if (Character.toLowerCase(pattern.charAt(i)) == Character.toLowerCase(Target.charAt(m + i))){
                if (i == pattern.length()-1){
                    return m;
                }
                i++;
            }
            else
            {
                if(borders[i] > -1 ){
                    m = m+i - borders[i];
                    i = borders[i];
                }
                else{
                    i = 0;
                    m++;
                }
            }
        }
        //kalau gagal mengembalikan -1
        return -1;
    }
}
