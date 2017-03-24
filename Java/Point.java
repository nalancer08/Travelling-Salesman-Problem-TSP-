import java.util.Random;

public class Point {
	
    public float x;
    public float y;
    
    public Point() {}
    
    public Point(int next) {
    	
    	this.x = new Random().nextInt(next);
    	this.y = new Random().nextInt(next);
    }

    @Override
    public String toString() {
        return "Point{" +
                "x=" + x +
                ", y=" + y +
                '}';
    }

}
