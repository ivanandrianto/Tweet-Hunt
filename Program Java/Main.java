import java.io.BufferedWriter;
import java.io.FileOutputStream;
import java.io.FileWriter;
import java.io.OutputStreamWriter;
import java.util.ArrayList;
import java.io.File;


public class Main {
	public static String keyword;
	public static String type;
	public static  String sport_keywords;
	public static String hiburan_keywords;
	public static String teknologi_keywords;
	public static String health_beauty_keywords;
	
	public static ArrayList<String> sportList;
	public static ArrayList<String> hiburanList;
	public static ArrayList<String> teknologiList;
	public static ArrayList<String> healthBeautyList;
	public static ArrayList<TweetResult> TweetResultList;
	
	public static void process_input(){
		/* memproses input argumen dan memasukkannya ke dalam list */
		sportList = new ArrayList<String>();
		String[] sport = sport_keywords.split("--");
		
		for (String s : sport) {
			
		    sportList.add(s);
		}
		
		hiburanList = new ArrayList<String>();
		String[] hiburan = hiburan_keywords.split("--");
		for (String s : hiburan) {
		    hiburanList.add(s);
		}
		
		teknologiList = new ArrayList<String>();
		String[] teknologi = teknologi_keywords.split("--");
		for (String s : teknologi) {
			teknologiList.add(s);
		}
		
		healthBeautyList = new ArrayList<String>();
		String[] healthBeauty = health_beauty_keywords.split("--");
		for (String s : healthBeauty) {
			healthBeautyList.add(s);
		}
	}
	
	public static void match_tweet(){
		/* menentukan kategori setiap tweet */
		//untuk setiap tweet
				for(int i=0;i<TweetResultList.size();i++){
					boolean match = false;
					int result = -1;
					
					//untuk kategori 1
					//untuk setiap keyword
					int j = 0;
					int category1Size = sportList.size();
					while((j<category1Size) && (!match)){
						String pattern = sportList.get(j);
						if(type.equals("KMP")){
							KMP A = new KMP(pattern);
					        result = A.SearchOn(TweetResultList.get(i).getContent());
						} else if(type.equals("BM")){
							BoyMoore B = new BoyMoore(pattern);
							result = B.SearchOn(TweetResultList.get(i).getContent());
						}
						if(result != -1){
							match = true;
							String output = "[sport][user]@" + TweetResultList.get(i).getUsername() + ":[/user][tweet]" + TweetResultList.get(i).getContent() +"[/tweet][link]" + TweetResultList.get(i).getLink() + "[/link][/catend]";
							System.out.println(output);
						}
						j++;
					}
					
					//kategori2
					j = 0;
					int category2Size = hiburanList.size();
					while((j<category2Size) && (!match)){
						String pattern = hiburanList.get(j);
						if(type.equals("KMP")){
							KMP A = new KMP(pattern);
					        result = A.SearchOn(TweetResultList.get(i).getContent());
						} else if(type.equals("BM")){
							BoyMoore B = new BoyMoore(pattern);
							result = B.SearchOn(TweetResultList.get(i).getContent());
						}
						if(result != -1){
							match = true;
							String output = "[hiburan][user]@" + TweetResultList.get(i).getUsername() + ":[/user][tweet]" + TweetResultList.get(i).getContent() +"[/tweet][link]" + TweetResultList.get(i).getLink() + "[/link][/catend]";
							System.out.println(output);
						}
						j++;
					}
					
					//kategori3
					j = 0;
					int category3Size = teknologiList.size();
					while((j<category3Size) && (!match)){
						String pattern = teknologiList.get(j);
						if(type.equals("KMP")){
							KMP A = new KMP(pattern);
					        result = A.SearchOn(TweetResultList.get(i).getContent());
						} else if(type.equals("BM")){
							BoyMoore B = new BoyMoore(pattern);
							result = B.SearchOn(TweetResultList.get(i).getContent());
						}
						if(result != -1){
							match = true;
							String output = "[teknologi][user]@" + TweetResultList.get(i).getUsername() + ":[/user][tweet]" + TweetResultList.get(i).getContent() +"[/tweet][link]" + TweetResultList.get(i).getLink() + "[/link][/catend]";
							System.out.println(output);
						}
						j++;
					}
					
					//kategori4
					j = 0;
					int category4Size = healthBeautyList.size();
					while((j<category4Size) && (!match)){
						String pattern = healthBeautyList.get(j);
						if(type.equals("KMP")){
							KMP A = new KMP(pattern);
					        result = A.SearchOn(TweetResultList.get(i).getContent());
						} else if(type.equals("BM")){
							BoyMoore B = new BoyMoore(pattern);
							result = B.SearchOn(TweetResultList.get(i).getContent());
						}
						if(result != -1){
							match = true;
							String output = "[healthbeauty][user]@" + TweetResultList.get(i).getUsername() + ":[/user][tweet]" + TweetResultList.get(i).getContent() +"[/tweet][link]" + TweetResultList.get(i).getLink() + "[/link][/catend]";
							System.out.println(output);
						}
						j++;
					}
					
					if(!(match)){
						String output = "[unknown][user]@" + TweetResultList.get(i).getUsername() + ":[/user][tweet]" + TweetResultList.get(i).getContent() +"[/tweet][link]" + TweetResultList.get(i).getLink() + "[/link][/catend]";
						System.out.println(output);
					}
					
				}
	}
	
	public static void main(String[] args){
		
		keyword = args[0];
        type = args[1];
        sport_keywords = args[2];
        hiburan_keywords = args[3];
        teknologi_keywords = args[4];
        health_beauty_keywords = args[5];
        
       GetTweet gt = new GetTweet(keyword);      
       TweetResultList = gt.generateTweets();
		process_input();
		match_tweet();
	}
}
