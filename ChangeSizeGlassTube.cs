using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ChangeSizeGlassTube : MonoBehaviour
{
     // Specifying when object is dragged
    void OnMouseDown() {
        transform.localScale = new Vector3 (0.3f,0.35f,0);
        }
}



