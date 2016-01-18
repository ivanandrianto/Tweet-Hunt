


import com.sun.xml.internal.bind.v2.schemagen.xmlschema.List;

import twitter4j.*;
import twitter4j.conf.ConfigurationBuilder;

import java.util.ArrayList;

public class GetTweet {
	public static final String CONSUMER_KEY = "fr04EqMOePbL444WzGLFdkhs7";
	public static final String CONSUMER_SECRET = "TuhFByuvFU4GtNghQdTk5VkAwds9e2glFMZiZvVczCqoy7Iq6u";
	public static final String ACCESS_KEY = "238877474-aNp11DApw8eCXYkGu5DHMCzjtOaBfz708K8231SV";
	public static final String ACCESS_SECRET = "fZHcFdRhrPUIeFkbgu4QrdZoDc0uB8daf51Dm4SPvLvYb";
	private String keyword;
	
	public GetTweet(String _keyword){
		/* konstruktor get tweet */
		keyword = _keyword;
	}
	
	public ArrayList<TweetResult> generateTweets(){
		/* memperoleh 100 tweet berdasarkan keyword */
		//switch(cmd[0].toLowerCase().replaceAll("\\s+$", "")){
        ArrayList<TweetResult> TweetResultList = new ArrayList<TweetResult>();
        ConfigurationBuilder cb = new ConfigurationBuilder();
        cb.setDebugEnabled(true)
                .setOAuthConsumerKey(CONSUMER_KEY)
                .setOAuthConsumerSecret(CONSUMER_SECRET)
                .setOAuthAccessToken(ACCESS_KEY)
                .setOAuthAccessTokenSecret(ACCESS_SECRET);
        
        TwitterFactory tf = new TwitterFactory(cb.build());
        Twitter twitter = tf.getInstance();
        int count = 0;
        
    try {
        Query query = new Query(keyword);
        QueryResult result;
        do {
        	//System.out.print("in while");
            result = twitter.search(query);
            ArrayList<Status> tweets = (ArrayList<Status>) result.getTweets();
            for (Status tweet : tweets) {
            	count++;
            	String user = tweet.getUser().getScreenName();
            	String content = tweet.getText();
            	String tweet_url = "https://twitter.com/" + tweet.getUser().getScreenName() 
            		    + "/status/" + tweet.getId();
            	TweetResult tr = new TweetResult(user, content, tweet_url);
            	TweetResultList.add(tr);
                //System.out.println("[user]@" + tweet.getUser().getScreenName() + "[/user][tweet]" + tweet.getText()+"[/tweet][link]"+tweet_url+"[/link]");
            }
        } while (((query = result.nextQuery()) != null) && (count < 100));
        //System.out.println("out of while");
        //System.exit(0);
    } catch (TwitterException te) {
        te.printStackTrace();
        //System.out.println("Failed to search tweets: " + te.getMessage());
        //System.exit(-1);
    }
    return TweetResultList;
}
}
