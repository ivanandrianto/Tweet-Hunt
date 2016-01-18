/* Tipe Bentukan Tweet Result */
public class TweetResult {
	private String username;
	private String content;
	private String link;
	public TweetResult(String _username, String _content, String _link){
		username = _username;
		content = _content;
		link = _link;
	}
	public String getUsername(){
		return username;
	}
	public String getContent(){
		return content;
	}
	public String getLink(){
		return link;
	}
}
